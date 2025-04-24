<?php
use models\CATEGORIA;
use models\PRODUTO;
use models\USUARIO;
use models\log_movimentacao;
use Auth;


class GerenciamentoController{

    public function salvaCategoria($nome_categoria){
        if(!$nome_categoria){
            return 'O nome da categoria é obrigatório';
        }

        $input['nome_categoia'] = $nome_categoria;
        CATEGORIA::create($input);
    
    }

    public function cadastrarProduto( $nome, $cod_categoria, $estoque){
        if(!$cod_categoria){
            return 'A categoria é obrigatório';
        }
        elseif(empty(CATEGORIA::where('cod_categoria',$cod_categoria)->first())){
            return 'Categoria não existe';
        }
        elseif(!$estoque){
            return 'A quantidade no estoque é obrigatoria';
        }
        $input['nome'] = $nome;
        $input['cod_categoria'] = $cod_categoria;
        $input['estoque'] = $estoque;

        PRODUTO::create($input);

    }


    public function consultarProdutos(Request $request){
        
       $query = PRODUTO::select(['id_produto','nome_produto','CATEGORIA.nome_categoria', 'estoque'])
       ->leftjoin('CATEGORIA', 'CATEGORIA.cod_categoria','=', 'PRODUTO.cod_categoria');

       when(!empty($request->id_produto), function() use ($query){
        $query->where('id_produto', $request->id_produto);
       });

       when(!empty($request->nome_produto), function() use ($query){
        $query->where('nome_produto','like', '%'.$request->nome_produto.'%');
       });
       return $query->get();

    }
        
    public function consultarCategorias(Request $request){

        $query = CATEGORIA::select(['id_categoria','nome_categoria']);

        when(!empty($request->nome_categoria), function() use ($query){
            $query->where('nome_categoria','like', '%'.$request->nome_categoria.'%');
           });
           
        return $query->get();
    }
       
    public function consultarMovimentacoes(){

        $query = log_movimentacao::select(['id','usuario','nome_acao', 'id_produto', 'data_acao']);
        return $query->get();
    }

    public function movimentarEstoque($cod_produto, $acao, $estoque){
        $user = Auth::user();

        $produto =PRODUTO::find($cod_produto)->first();
        if(empty($produto)){
            return "Produto não encontrado";
        }
    
        if ($acao == "saida"){
            if ($produto["estoque"] < $estoque){
                return "Estoque insuficiente.";
            }
            $estoque['estoque'] = ($produto['estoque'] - 1);
            $produto->update($estoque);
        }
        elseif($acao == "entrada"){

            $estoque['estoque'] = ($produto['estoque'] + 1);
            $produto->update($estoque);

        }
        else{
            return 'acao de movimentação invalido!';
        }
            
        $insert =[
            "usuario" => $user->cod_usuario,
            "data_acao"=> now(),
            "id_produto"=> $cod_produto,
            "nome_acao"=> $acao,
        ];

        log_movimentacao::create($insert);
    }

}

?>

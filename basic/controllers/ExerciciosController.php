<?php

namespace app\controllers;

use app\models\CadastroModel;
use yii\base\Controller;
use app\models\Pessoas;
use yii\data\Pagination;

class ExerciciosController extends Controller
{
    // http://auladb.com/exercicios/formulario
    public function actionFormulario()
    {
        // instanciar model
        $cadastroModel = new CadastroModel();
        // pega a lista de posts que foram enviados. O mesmo que $_POST
        $post = \Yii::$app->request->post();

        // verificar se houve um post no cadastro e se os campos da model estao corretos
        if ($cadastroModel->load($post) && $cadastroModel->validate()) {
            // renderiza isso
            return $this->render('formulario-confirmacao', [
                'model' => $cadastroModel
            ]);
        } else {
            // rederiza isso
            // se não for definido o nome do caminho, entende que a view tem o mesmo nome da controller
            return $this->render('formulario', [
                'model' => $cadastroModel
            ]);
        }

        // // jogar a model para view
        // return $this->render('formulario', [
        //     'model' => $cadastroModel
        // ]);
    }

    public function actionPessoas()
    {
        // chamada estática para o método find
        /*$pessoas = Pessoas::find()->orderBy('nome')->all(); --> SELECT * FROM PESSOAS ORDER BY 'nome'
        echo '<pre>';
        print_r($pessoas);*/

        /*$pessoa = Pessoas::findOne(5);
        echo $pessoa->nome . ' - ' . $pessoa->email;*/

        // adicionando uma pessoa no banco
        // $novaPessoa = new Pessoas();
        // $novaPessoa->nome = 'nome';
        // $novaPessoa->idade = 12;
        // $novaPessoa->save();

        // update em um dado no banco
        // $pessoa = Pessoas::findOne(5);
        // $pessoa->nome = 'Manuel Bandeira';
        // $pessoa->save();

        // deletando uma pessoa
        // $pessoa = Pessoas::findOne(5);
        // $pessoa->delete();

        // trazer todas as pessoas com especificações
        $pessoa = Pessoas::find()
            ->where(['id' => 5, 'nome' => 'Manuel Bandeira'])
            ->all();

        // trazer todas as pessoas 
        $pessoa = Pessoas::find()->all();


        // echo 'Nome alterado para ' . $pessoa->nome;

        // paginação
        $query = Pessoas::find();

        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count()
        ]);

        $pessoas = $query->orderBy('nome')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        // renderização
        // view pessoas e pagination
        return $this->render('pessoas', [
            'pessoas' => $pessoas,
            'pagination' => $pagination
        ]);
    }
}

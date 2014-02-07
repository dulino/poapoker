<?php

class TabelasIniciaisSeeder extends Seeder {

    public function run()
    {
        DB::table('etapa_jogadores')->delete();
        DB::table('etapas')->delete();
        DB::table('rankings')->delete();
        DB::table('jogadores')->delete();

        Jogador::create(array('nome' => 'Giuliano Massaro', 'apelido' => 'Dulino'));
        Jogador::create(array('nome' => 'Luiz Gustavo Kratz', 'apelido' => 'Gugu'));
        Jogador::create(array('nome' => 'Guilherme Machado', 'apelido' => 'Bife'));
        Jogador::create(array('nome' => 'Bernardo Balinhas', 'apelido' => 'Balinhas'));
        Jogador::create(array('nome' => 'Edvar Araújo', 'apelido' => 'Edvar'));
        Jogador::create(array('nome' => 'Rodrigo Notari', 'apelido' => 'Notari'));
        Jogador::create(array('nome' => 'Roberto Pawelsky', 'apelido' => 'Pantro'));
        Jogador::create(array('nome' => 'Eduardo Ávila', 'apelido' => 'Avila'));
        Jogador::create(array('nome' => 'Rafael Ortiz', 'apelido' => 'Ortiz'));
        Jogador::create(array('nome' => 'Márcio Neron', 'apelido' => 'Chanchito'));
        Jogador::create(array('nome' => 'Renato', 'apelido' => 'Deco'));
        Jogador::create(array('nome' => 'Rodrigo Maio', 'apelido' => 'Quick'));
        Jogador::create(array('nome' => 'Carlos Lienert', 'apelido' => 'Lienert'));
        Jogador::create(array('nome' => 'Luiz Brait', 'apelido' => 'Brait'));
        Jogador::create(array('nome' => 'Lauro Teixeira', 'apelido' => 'Laurinho'));

        Ranking::create(array('id' => 1, 'descricao' => '2014'));

        Etapa::create(array('nome' => 'Etapa 1', 'data' => '2014-02-11','ranking_id' => '1'));
        Etapa::create(array('nome' => 'Etapa 2', 'data' => '2014-03-04','ranking_id' => '1'));

        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '1',  'rebuys' => '0', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '2',  'rebuys' => '1', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '3',  'rebuys' => '0', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '4',  'rebuys' => '1', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '5',  'rebuys' => '1', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '6',  'posicao' => '6',  'pontos' => '15', 'rebuys' => '1', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '7',  'posicao' => '7',  'pontos' => '13', 'rebuys' => '0', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '8',  'posicao' => '8',  'pontos' => '11', 'rebuys' => '1', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '9',  'posicao' => '9',  'pontos' => '09', 'rebuys' => '1', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '10', 'posicao' => '10', 'pontos' => '07', 'rebuys' => '0', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '11', 'posicao' => '11', 'pontos' => '05', 'rebuys' => '1', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '12', 'posicao' => '12', 'pontos' => '04', 'rebuys' => '1', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '13', 'posicao' => '13', 'pontos' => '03', 'rebuys' => '0', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '14', 'posicao' => '14', 'pontos' => '02', 'rebuys' => '1', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '15', 'posicao' => '15', 'pontos' => '01', 'rebuys' => '1', 'addons' => '1'));

        EtapaJogador::create(array('etapa_id' => '2', 'jogador_id' => '15', 'rebuys' => '0', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '2', 'jogador_id' => '14', 'rebuys' => '1', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '2', 'jogador_id' => '13', 'rebuys' => '0', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '2', 'jogador_id' => '12', 'rebuys' => '1', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '2', 'jogador_id' => '11', 'posicao' => '5',  'pontos' => '17', 'rebuys' => '1', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '2', 'jogador_id' => '10', 'posicao' => '6',  'pontos' => '15', 'rebuys' => '1', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '2', 'jogador_id' => '9',  'posicao' => '7',  'pontos' => '13', 'rebuys' => '0', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '2', 'jogador_id' => '8',  'posicao' => '8',  'pontos' => '11', 'rebuys' => '1', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '2', 'jogador_id' => '7',  'posicao' => '9',  'pontos' => '09', 'rebuys' => '1', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '2', 'jogador_id' => '6',  'posicao' => '10', 'pontos' => '07', 'rebuys' => '0', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '2', 'jogador_id' => '5',  'posicao' => '11', 'pontos' => '05', 'rebuys' => '1', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '2', 'jogador_id' => '4',  'posicao' => '12', 'pontos' => '04', 'rebuys' => '1', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '2', 'jogador_id' => '3',  'posicao' => '13', 'pontos' => '03', 'rebuys' => '0', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '2', 'jogador_id' => '2',  'posicao' => '14', 'pontos' => '02', 'rebuys' => '1', 'addons' => '1'));
        EtapaJogador::create(array('etapa_id' => '2', 'jogador_id' => '1',  'posicao' => '15', 'pontos' => '01', 'rebuys' => '1', 'addons' => '1'));

        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '20', 'posicao' => '1' , 'pontos' => '33'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '20', 'posicao' => '2' , 'pontos' => '30'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '20', 'posicao' => '3' , 'pontos' => '27'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '20', 'posicao' => '4' , 'pontos' => '24'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '20', 'posicao' => '5' , 'pontos' => '22'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '20', 'posicao' => '6' , 'pontos' => '20'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '20', 'posicao' => '7' , 'pontos' => '18'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '20', 'posicao' => '8' , 'pontos' => '16'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '20', 'posicao' => '9' , 'pontos' => '14'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '20', 'posicao' => '10', 'pontos' => '12'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '20', 'posicao' => '11', 'pontos' => '10'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '20', 'posicao' => '12', 'pontos' => '09'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '20', 'posicao' => '13', 'pontos' => '08'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '20', 'posicao' => '14', 'pontos' => '07'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '20', 'posicao' => '15', 'pontos' => '06'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '20', 'posicao' => '16', 'pontos' => '05'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '20', 'posicao' => '17', 'pontos' => '04'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '20', 'posicao' => '18', 'pontos' => '03'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '20', 'posicao' => '19', 'pontos' => '02'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '20', 'posicao' => '20', 'pontos' => '01'));

        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '19', 'posicao' => '1' , 'pontos' => '32'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '19', 'posicao' => '2' , 'pontos' => '29'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '19', 'posicao' => '3' , 'pontos' => '26'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '19', 'posicao' => '4' , 'pontos' => '23'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '19', 'posicao' => '5' , 'pontos' => '21'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '19', 'posicao' => '6' , 'pontos' => '19'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '19', 'posicao' => '7' , 'pontos' => '17'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '19', 'posicao' => '8' , 'pontos' => '15'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '19', 'posicao' => '9' , 'pontos' => '13'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '19', 'posicao' => '10', 'pontos' => '11'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '19', 'posicao' => '11', 'pontos' => '09'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '19', 'posicao' => '12', 'pontos' => '08'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '19', 'posicao' => '13', 'pontos' => '07'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '19', 'posicao' => '14', 'pontos' => '06'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '19', 'posicao' => '15', 'pontos' => '05'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '19', 'posicao' => '16', 'pontos' => '04'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '19', 'posicao' => '17', 'pontos' => '03'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '19', 'posicao' => '18', 'pontos' => '02'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '19', 'posicao' => '19', 'pontos' => '01'));

        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '18', 'posicao' => '1' , 'pontos' => '31'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '18', 'posicao' => '2' , 'pontos' => '28'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '18', 'posicao' => '3' , 'pontos' => '25'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '18', 'posicao' => '4' , 'pontos' => '22'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '18', 'posicao' => '5' , 'pontos' => '20'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '18', 'posicao' => '6' , 'pontos' => '18'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '18', 'posicao' => '7' , 'pontos' => '16'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '18', 'posicao' => '8' , 'pontos' => '14'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '18', 'posicao' => '9' , 'pontos' => '12'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '18', 'posicao' => '10', 'pontos' => '10'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '18', 'posicao' => '11', 'pontos' => '08'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '18', 'posicao' => '12', 'pontos' => '07'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '18', 'posicao' => '13', 'pontos' => '06'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '18', 'posicao' => '14', 'pontos' => '05'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '18', 'posicao' => '15', 'pontos' => '04'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '18', 'posicao' => '16', 'pontos' => '03'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '18', 'posicao' => '17', 'pontos' => '02'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '18', 'posicao' => '18', 'pontos' => '01'));

        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '17', 'posicao' => '1' , 'pontos' => '30'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '17', 'posicao' => '2' , 'pontos' => '27'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '17', 'posicao' => '3' , 'pontos' => '24'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '17', 'posicao' => '4' , 'pontos' => '21'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '17', 'posicao' => '5' , 'pontos' => '19'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '17', 'posicao' => '6' , 'pontos' => '17'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '17', 'posicao' => '7' , 'pontos' => '15'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '17', 'posicao' => '8' , 'pontos' => '13'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '17', 'posicao' => '9' , 'pontos' => '11'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '17', 'posicao' => '10', 'pontos' => '09'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '17', 'posicao' => '11', 'pontos' => '07'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '17', 'posicao' => '12', 'pontos' => '06'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '17', 'posicao' => '13', 'pontos' => '05'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '17', 'posicao' => '14', 'pontos' => '04'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '17', 'posicao' => '15', 'pontos' => '03'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '17', 'posicao' => '16', 'pontos' => '02'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '17', 'posicao' => '17', 'pontos' => '01'));

        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '16', 'posicao' => '1' , 'pontos' => '29'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '16', 'posicao' => '2' , 'pontos' => '26'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '16', 'posicao' => '3' , 'pontos' => '23'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '16', 'posicao' => '4' , 'pontos' => '20'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '16', 'posicao' => '5' , 'pontos' => '18'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '16', 'posicao' => '6' , 'pontos' => '16'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '16', 'posicao' => '7' , 'pontos' => '14'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '16', 'posicao' => '8' , 'pontos' => '12'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '16', 'posicao' => '9' , 'pontos' => '10'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '16', 'posicao' => '10', 'pontos' => '08'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '16', 'posicao' => '11', 'pontos' => '06'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '16', 'posicao' => '12', 'pontos' => '05'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '16', 'posicao' => '13', 'pontos' => '04'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '16', 'posicao' => '14', 'pontos' => '03'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '16', 'posicao' => '15', 'pontos' => '02'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '16', 'posicao' => '16', 'pontos' => '01'));

        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '15', 'posicao' => '1' , 'pontos' => '28'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '15', 'posicao' => '2' , 'pontos' => '25'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '15', 'posicao' => '3' , 'pontos' => '22'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '15', 'posicao' => '4' , 'pontos' => '19'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '15', 'posicao' => '5' , 'pontos' => '17'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '15', 'posicao' => '6' , 'pontos' => '15'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '15', 'posicao' => '7' , 'pontos' => '13'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '15', 'posicao' => '8' , 'pontos' => '11'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '15', 'posicao' => '9' , 'pontos' => '09'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '15', 'posicao' => '10', 'pontos' => '07'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '15', 'posicao' => '11', 'pontos' => '05'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '15', 'posicao' => '12', 'pontos' => '04'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '15', 'posicao' => '13', 'pontos' => '03'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '15', 'posicao' => '14', 'pontos' => '02'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '15', 'posicao' => '15', 'pontos' => '01'));

        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '14', 'posicao' => '1' , 'pontos' => '27'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '14', 'posicao' => '2' , 'pontos' => '24'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '14', 'posicao' => '3' , 'pontos' => '21'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '14', 'posicao' => '4' , 'pontos' => '18'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '14', 'posicao' => '5' , 'pontos' => '16'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '14', 'posicao' => '6' , 'pontos' => '14'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '14', 'posicao' => '7' , 'pontos' => '12'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '14', 'posicao' => '8' , 'pontos' => '10'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '14', 'posicao' => '9' , 'pontos' => '08'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '14', 'posicao' => '10', 'pontos' => '06'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '14', 'posicao' => '11', 'pontos' => '04'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '14', 'posicao' => '12', 'pontos' => '03'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '14', 'posicao' => '13', 'pontos' => '02'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '14', 'posicao' => '14', 'pontos' => '01'));

        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '13', 'posicao' => '1' , 'pontos' => '26'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '13', 'posicao' => '2' , 'pontos' => '23'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '13', 'posicao' => '3' , 'pontos' => '20'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '13', 'posicao' => '4' , 'pontos' => '17'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '13', 'posicao' => '5' , 'pontos' => '15'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '13', 'posicao' => '6' , 'pontos' => '13'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '13', 'posicao' => '7' , 'pontos' => '11'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '13', 'posicao' => '8' , 'pontos' => '09'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '13', 'posicao' => '9' , 'pontos' => '07'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '13', 'posicao' => '10', 'pontos' => '05'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '13', 'posicao' => '11', 'pontos' => '03'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '13', 'posicao' => '12', 'pontos' => '02'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '13', 'posicao' => '13', 'pontos' => '01'));

        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '12', 'posicao' => '1' , 'pontos' => '25'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '12', 'posicao' => '2' , 'pontos' => '22'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '12', 'posicao' => '3' , 'pontos' => '19'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '12', 'posicao' => '4' , 'pontos' => '16'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '12', 'posicao' => '5' , 'pontos' => '14'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '12', 'posicao' => '6' , 'pontos' => '12'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '12', 'posicao' => '7' , 'pontos' => '10'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '12', 'posicao' => '8' , 'pontos' => '08'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '12', 'posicao' => '9' , 'pontos' => '06'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '12', 'posicao' => '10', 'pontos' => '04'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '12', 'posicao' => '11', 'pontos' => '02'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '12', 'posicao' => '12', 'pontos' => '01'));

        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '11', 'posicao' => '1' , 'pontos' => '23'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '11', 'posicao' => '2' , 'pontos' => '21'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '11', 'posicao' => '3' , 'pontos' => '18'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '11', 'posicao' => '4' , 'pontos' => '15'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '11', 'posicao' => '5' , 'pontos' => '13'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '11', 'posicao' => '6' , 'pontos' => '11'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '11', 'posicao' => '7' , 'pontos' => '09'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '11', 'posicao' => '8' , 'pontos' => '07'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '11', 'posicao' => '9' , 'pontos' => '05'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '11', 'posicao' => '10', 'pontos' => '03'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '11', 'posicao' => '11', 'pontos' => '01'));

        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '10', 'posicao' => '1' , 'pontos' => '22'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '10', 'posicao' => '2' , 'pontos' => '19'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '10', 'posicao' => '3' , 'pontos' => '16'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '10', 'posicao' => '4' , 'pontos' => '13'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '10', 'posicao' => '5' , 'pontos' => '11'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '10', 'posicao' => '6' , 'pontos' => '09'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '10', 'posicao' => '7' , 'pontos' => '07'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '10', 'posicao' => '8' , 'pontos' => '05'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '10', 'posicao' => '9' , 'pontos' => '03'));
        Pontuacao::create(array('ranking_id' => '1', 'qtd_jogadores' => '10', 'posicao' => '10', 'pontos' => '01'));
    }

}
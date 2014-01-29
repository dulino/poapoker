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
        Jogador::create(array('nome' => 'Ed Persantj', 'apelido' => 'Ed'));

        Ranking::create(array('id' => 1, 'descricao' => '2014'));

        Etapa::create(array('nome' => 'Etapa 1', 'data' => '2014-02-11','ranking_id' => '1'));
        Etapa::create(array('nome' => 'Etapa 2', 'data' => '2014-03-04','ranking_id' => '1'));

        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '1', 'posicao' => '1', 'pontos' => '18'));
        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '2', 'posicao' => '2', 'pontos' => '16'));
        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '3', 'posicao' => '3', 'pontos' => '14'));
        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '4', 'posicao' => '4', 'pontos' => '12'));
        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '5', 'posicao' => '5', 'pontos' => '10'));
        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '6', 'posicao' => '6', 'pontos' => '8'));
        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '7', 'posicao' => '7', 'pontos' => '6'));
        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '8', 'posicao' => '8', 'pontos' => '4'));
        EtapaJogador::create(array('etapa_id' => '1', 'jogador_id' => '9', 'posicao' => '9', 'pontos' => '2'));

        EtapaJogador::create(array('etapa_id' => '2', 'jogador_id' => '01', 'posicao' => '1', 'pontos' => '8'));
        EtapaJogador::create(array('etapa_id' => '2', 'jogador_id' => '10', 'posicao' => '2', 'pontos' => '6'));
        EtapaJogador::create(array('etapa_id' => '2', 'jogador_id' => '09', 'posicao' => '3', 'pontos' => '4'));
        EtapaJogador::create(array('etapa_id' => '2', 'jogador_id' => '03', 'posicao' => '4', 'pontos' => '2'));
    }

}
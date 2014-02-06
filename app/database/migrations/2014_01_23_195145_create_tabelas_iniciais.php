<?php

use Illuminate\Database\Migrations\Migration;

class CreateTabelasIniciais extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jogadores', function($table)
		{
			$table->increments('id');
			$table->string('apelido', 128)->unique();
			$table->string('nome');
		});

		Schema::create('rankings', function($table) {
			$table->increments('id');
			$table->string('descricao', 128)->unique();
		});

		Schema::create('etapas', function($table)
		{
			$table->increments('id');
			$table->string('nome', 128);
			$table->date('data');
			$table->decimal('valor_buyin', 8, 2)->default('10');
			$table->integer('fichas_buyin')->unsigned()->default('5000');
			$table->decimal('valor_addon', 8, 2)->nullable()->default('0');
			$table->integer('fichas_addon')->unsigned()->nullable()->default('1000');
			$table->integer('ranking_id')->unsigned();
			$table->foreign('ranking_id')->references('id')->on('rankings');
		});

		Schema::create('etapa_jogadores', function($table) {
			$table->increments('id');
			$table->integer('etapa_id')->unsigned();
			$table->integer('jogador_id')->unsigned();
			$table->integer('rebuys')->unsigned()->default(0);
			$table->integer('addons')->unsigned()->default(0);
			$table->integer('posicao')->unsigned()->nullable();
			$table->integer('pontos')->unsigned()->nullable();
			$table->foreign('etapa_id')->references('id')->on('etapas');
			$table->foreign('jogador_id')->references('id')->on('jogadores');
			$table->unique(array('etapa_id', 'jogador_id'));
		});


		Schema::create('pontuacoes', function($table)
		{
			$table->increments('id');
			$table->integer('ranking_id')->unsigned();
			$table->integer('qtd_jogadores')->unsigned();
			$table->integer('posicao')->unsigned();
			$table->integer('pontos')->unsigned();
			$table->foreign('ranking_id')->references('id')->on('rankings');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pontuacoes');
		Schema::drop('etapa_jogadores');
		Schema::drop('etapas');
		Schema::drop('rankings');
		Schema::drop('jogadores');
	}

}
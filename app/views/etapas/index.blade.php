@extends('layouts.master')

@section('content')
<div class="row text-center">&nbsp;</div>
<div class="row">
	<div class="col-xs-8 col-sm-8 col-md-6">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;<strong>ETAPAS POAPOKER</strong></div>
			@if ($etapas->isEmpty())
				<p>Sem etapas! :(</p>
			@else
			<!-- Table -->
			<table class="table table-hover table-condensed">
				<thead>
					<tr>
						<th>Data</th>
						<th>Etapa</th>
						<th>Ranking</th>
					</tr>
				</thead>
				<tbody>
					@foreach($etapas as $etapa)
						<tr>
							<td>{{ $etapa->data }}</td>
							<td>{{ $etapa->nome }}</td>
							<td>{{ $etapa->ranking->descricao }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			@endif
		</div>      
	</div>      
</div>


@stop

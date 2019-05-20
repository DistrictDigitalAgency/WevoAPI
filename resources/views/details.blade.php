@include('header')



		<div id="chart-div"></div>
		<?= Lava::render('DonutChart', 'nosVotes', 'chart-div') ?>

		

@include('footer')
<?php
/* ****************************************

	Template: NEMJH
	Soubor: template-parts/breadcrumb.php
	Vytvoril: Marek Marek
	Popis: Výpis drobečkové navigace

**************************************** */
?>
<div class="drobeckova_navigace">
<?php if(function_exists('bcn_display'))
{
    bcn_display();
} ?>
</div>
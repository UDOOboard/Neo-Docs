<style>
	.navbar {
		background-color: white;
	}
	.udoologo img {
		position: relative;
		top: 2px;
	}
	.udoologo span {
		font-size: 18px;
		color: black;
		font-weight: bold;
		position: relative;
		top: 6px;
	}
	.button_docs {
		font-weight: bold;
		border: 3px solid #ec009c;
		background: #ec009c;
		color: white;
		font-size: 14px;
		position: relative;
		top: 6px;
	}
</style>
<a class="udoologo pull-left" href="<?= $params['base_page'] . $params['index']->getUri(); ?>">
		<img src="http://www.udoo.org/docs-neo/templates/default/themes/udoo/img/logo_docs_neo.png"> <span>Docs</span>
		<a class="btn btn-lg button_docs pull-right" href="http://www.udoo.org/docs/">UDOO Quad/Dual Docs</a>
</a>

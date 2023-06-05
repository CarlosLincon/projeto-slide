<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
    <!-- css geral -->
	<link rel="stylesheet" href="Scripts/style.css" type="text/css" />
    
    <!-- metatags -->
    <title>Faculdade Santíssimo Sacramento</title>
	<meta name="keywords" content="Faculdade, Santíssimo Sacramento, Administração, Ciências Contábeis, Engenharia de Produção, Psicologia, Pedagogia, Sistemas de Informação, Graduação, Pós-Graduação, Alagoinhas, Bahia">
	<meta name="description" content="Faculdade Santíssimo Sacramento - Os melhores cursos de Graduação e Pós-Graduação você encontra aqui! - Alagoinhas, Bahia">
	<meta name="author" content="Allan Paixão e Glauberty Nadson">
    

</head>

<body>

	
		<div id="topo">
        
    		<a href="index.php"><div id="banner"></div></a>
        
            <div id="msg">
            <div>
            <?php
             date_default_timezone_set('America/Sao_Paulo'); ;
			$meses = array (1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro");
			$diasdasemana = array (1 => "Segunda-Feira",2 => "Terça-Feira",3 => "Quarta-Feira",4 => "Quinta-Feira",5 => "Sexta-Feira",6 => "Sábado",0 => "Domingo");
			$hoje = getdate();
			$dia = $hoje["mday"];
			$mes = $hoje["mon"];
			$nomemes = $meses[$mes];
			$ano = $hoje["year"];
			$diadasemana = $hoje["wday"];
			$nomediadasemana = $diasdasemana[$diadasemana];
			echo "Seja Bem-vindo! - Hoje é $nomediadasemana, $dia de $nomemes de $ano";
			echo date (" - H:i "); echo "hrs";
			?>
			</div>
            </div>
            
           	<div class="menu">
				<ul>
					<li><a href="index.php">&nbsp;&nbsp;Home&nbsp;&nbsp;</a></li>
                   	
					<li><a href="graduacao.php">&nbsp;Graduação&nbsp;</a>
                        <ul>
                            <li><a href="administracao.php">Administração</a></li>
                            <li><a href="ciencias-contabeis.php">Ciências Contábeis</a></li>
                            <li><a href="direito.php">Direito</a></li>
                            <li><a href="enfermagem.php">Enfermagem</a></li>
                            <li><a href="eng-producao.php">Engenharia de Produção</a></li>
                            <li><a href="pedagogia.php">Pedagogia</a></li>
                            <li><a href="psicologia.php">Psicologia</a></li>
                            <li><a href="servico-social.php">Serviço Social</a></li>
                            <li><a href="sistemas-de-informacao.php">Sistemas de Informação</a></li>
                       </ul>
                    </li>
                    <li><a href="pos-graduacao.php">&nbsp;Pós-Graduação&nbsp;</a>
                    <li><a href="academico.php">&nbsp;Acadêmico&nbsp;</a>
                        <ul>
			    <li><a href="/ebook">E-book</a></li>
                            <li><a href="extensao.php">Extensão</a></li>
                            <li><a href="estagio.php">Estágio</a></li>
                            <li><a href="diploma.php">Solicitação de Diploma</a></li>
                            <!-- <li><a href="egresso.php">Egresso</a></li> -->
                            <li><a href="mensalidades.php">Mensalidades e Taxas</a></li>
                            <li><a href="manual.php">Manual do Aluno</a></li>
						    <li><a href="colacao.php" target="_blank">Colação de Grau</a></li>
                            <li><a href="areadoaluno" target="_blank">Histórico</a></li>
                            <li><a href="areadoaluno" target="_blank">Caderneta On-line</a></li>
                            <li><a href="certificados.php" target="_blank">Certificados</a></li>
                            <li><a href="biblioteca.php" target="_blank">Biblioteca</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="institucional.php">&nbsp;Institucional&nbsp;&nbsp;</a>
                        <ul>
                            <li><a href="faculdade.php">A Faculdade</a></li>
                            <li><a href="infraestrutura.php">Infraestrutura</a></li>
                            <li><a href="corpo-adm.php">Corpo Administrativo</a></li>
                            <li><a href="corpo-docente.php">Corpo Docente</a></li>
                            <li><a href="regimentos.php">Regimentos</a></li>
                            <li><a href="publicacoes.php">Publicações</a></li>
                            <li><a href="logomarca.php">Logomarca</a></li>
                            <li><a href="cpa.php">CPA</a></li>
                            <li><a href="/parceiros">Empresas Parceiras</a></li>
                            <!-- http://www.fsssacramento.br/avaliacao/base/principal.htm -->
                        </ul>
                    </li>
                    
                    <li><a href="faleconosco.php">&nbsp;Contato</a>
                    	<ul>
                        	<li><a href="faleconosco.php">Fale Conosco</a></li>
                            <li><a href="localizacao.php">Localização</a></li>
                            <li><a href="ouvidoria.php">Ouvidoria</a></li>
                        </ul>
                    </li>                    
                    
				</ul>
			</div>
            
            
        
        <br /><br />
        </div>
        
	
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104086298-4', 'auto');
  ga('send', 'pageview');

</script>
    
</body>
</html>
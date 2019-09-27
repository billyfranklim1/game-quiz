-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 27-Set-2019 às 21:27
-- Versão do servidor: 5.7.27-0ubuntu0.19.04.1
-- PHP Version: 7.2.19-0ubuntu0.19.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bict`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina_usuario`
--

CREATE TABLE `disciplina_usuario` (
  `id_usuario_obrigatoria` int(11) NOT NULL,
  `usuario_idUsuarios` int(11) NOT NULL,
  `disciplina_idDisciplina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `engenharias`
--

CREATE TABLE `engenharias` (
  `idEngenharia` int(11) NOT NULL,
  `strnomeengenharia` varchar(255) NOT NULL,
  `descricao` varchar(555) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `engenharias`
--

INSERT INTO `engenharias` (`idEngenharia`, `strnomeengenharia`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Engenharia da Computação', NULL, NULL, NULL),
(2, 'Engenharia Civil', NULL, NULL, NULL),
(3, 'Engenhraria Ambiental', NULL, NULL, NULL),
(4, 'Engenharia Mecânica', NULL, NULL, NULL),
(5, 'Engenharia Aeroespacial', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `engenharia_optativas`
--

CREATE TABLE `engenharia_optativas` (
  `id_engenharia_optativas` int(11) NOT NULL,
  `fk_idengenharia` int(11) NOT NULL,
  `fk_idoptativa` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `engenharia_optativas`
--

INSERT INTO `engenharia_optativas` (`id_engenharia_optativas`, `fk_idengenharia`, `fk_idoptativa`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 5, NULL, NULL),
(3, 1, 4, NULL, NULL),
(4, 1, 6, NULL, NULL),
(5, 1, 7, NULL, NULL),
(6, 1, 2, NULL, NULL),
(7, 1, 3, NULL, NULL),
(8, 4, 4, NULL, NULL),
(9, 4, 5, NULL, NULL),
(10, 4, 6, NULL, NULL),
(11, 3, 8, NULL, NULL),
(12, 1, 9, NULL, NULL),
(13, 1, 10, NULL, NULL),
(14, 1, 11, NULL, NULL),
(15, 1, 12, NULL, NULL),
(16, 1, 13, NULL, NULL),
(17, 1, 14, NULL, NULL),
(18, 3, 16, NULL, NULL),
(19, 3, 17, NULL, NULL),
(20, 3, 18, NULL, NULL),
(21, 3, 19, NULL, NULL),
(22, 3, 20, NULL, NULL),
(23, 3, 21, NULL, NULL),
(24, 3, 22, NULL, NULL),
(25, 3, 23, NULL, NULL),
(26, 3, 24, NULL, NULL),
(27, 3, 25, NULL, NULL),
(28, 3, 26, NULL, NULL),
(29, 3, 27, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `logAcesso`
--

CREATE TABLE `logAcesso` (
  `idlogacesso` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `tempo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `logAcesso`
--

INSERT INTO `logAcesso` (`idlogacesso`, `idusuario`, `tempo`) VALUES
(1, 31, '00:02:19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `logacesso`
--

CREATE TABLE `logacesso` (
  `idlogacesso` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `tempo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `logacesso`
--

INSERT INTO `logacesso` (`idlogacesso`, `idusuario`, `tempo`) VALUES
(1, 31, '00:09:53'),
(2, 31, '00:41:39');

-- --------------------------------------------------------

--
-- Estrutura da tabela `obrigatorias`
--

CREATE TABLE `obrigatorias` (
  `idDiciplina` int(11) NOT NULL,
  `strnomediciplina` varchar(255) NOT NULL,
  `horas` int(11) DEFAULT NULL,
  `descricao` varchar(555) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `obrigatorias`
--

INSERT INTO `obrigatorias` (`idDiciplina`, `strnomediciplina`, `horas`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Ciecia e Tecnologia', 60, NULL, NULL, NULL),
(2, 'Calculo Diferencial', 60, NULL, NULL, NULL),
(3, 'Vetores e Gometria Analitica', 60, NULL, NULL, NULL),
(4, 'Desenho Computacionall', 60, NULL, NULL, NULL),
(5, 'Meio Ambiente', 30, NULL, NULL, NULL),
(6, 'Quimica Geral e Inorganica', 60, NULL, NULL, NULL),
(7, 'Pratica de Leitura e Escrita', 30, NULL, NULL, NULL),
(8, 'Fundamentos da Computação', 60, NULL, NULL, NULL),
(9, 'Calculo Integral', 60, NULL, NULL, NULL),
(10, 'Álgebra Linear', 60, NULL, NULL, NULL),
(11, 'Fenômenos Mecanicos', 60, NULL, NULL, NULL),
(12, 'Adminstração e Economia', 60, NULL, NULL, NULL),
(13, 'Quimica Experimental', 30, NULL, NULL, NULL),
(14, 'Fundamentos da Segurança do Trabalho', 30, NULL, NULL, NULL),
(15, 'Metodologia da Pesquisa Cientifica', 30, NULL, NULL, NULL),
(16, 'Introdução a Probabilidade e Estatistica', 30, NULL, NULL, NULL),
(17, 'Funções de Varias Variaveis', 90, NULL, NULL, NULL),
(18, 'Oscilaçoes, Ondas e Ópticas', 60, NULL, NULL, NULL),
(19, 'Fisica Experimental I', 30, NULL, NULL, NULL),
(20, 'Calculo Numerico', 60, NULL, NULL, NULL),
(21, 'Equações Diferenciais I', 60, NULL, NULL, NULL),
(22, 'Fenomenos Eletromagneticos', 30, NULL, NULL, NULL),
(23, 'Fisica Experimental II', 30, NULL, NULL, NULL),
(24, 'Trabalho de Conclusão de cursos', 60, NULL, NULL, NULL),
(25, 'Atividades Complementares', 90, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `optativas`
--

CREATE TABLE `optativas` (
  `idOptativa` int(11) NOT NULL,
  `strnomeoptativa` varchar(255) NOT NULL,
  `horas` varchar(10) DEFAULT NULL,
  `descricao` varchar(555) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `optativas`
--

INSERT INTO `optativas` (`idOptativa`, `strnomeoptativa`, `horas`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Banco de Dados', '90', NULL, NULL, NULL),
(2, 'Laboratório de Programação ', '30', NULL, NULL, NULL),
(3, 'Paradigmas da Programação', '90', NULL, NULL, NULL),
(4, 'Eletricidade Aplicada ', '60', NULL, NULL, NULL),
(5, 'Circuito Digitais', '60', NULL, NULL, NULL),
(6, 'Eletrônica Aplicada', '60', NULL, NULL, NULL),
(7, ' Engenharia de Software', '60', NULL, NULL, NULL),
(8, 'Agricultura Orgânica', '60', NULL, NULL, NULL),
(9, 'Laboratório de Eletrônica de Aplicada ', '60', NULL, NULL, NULL),
(10, 'Laboratório de Circuito Digitais', '60', NULL, NULL, NULL),
(11, 'Arquitetura de Computadores', '60', NULL, NULL, NULL),
(12, 'Sistemas Operacionais', '60', NULL, NULL, NULL),
(13, 'Inteligencia Artificial', '60', NULL, NULL, NULL),
(14, 'Projeto e Desenvolvimento de Software ', '60', NULL, NULL, NULL),
(15, 'Desenho para Engenharia', '60', NULL, NULL, NULL),
(16, 'Microbiologia Ambiental', '60', NULL, NULL, NULL),
(17, 'Topografia', '60', NULL, NULL, NULL),
(18, 'Geologia', NULL, NULL, NULL, NULL),
(19, 'Materiais de Construção', '60', NULL, NULL, NULL),
(20, 'Resistência dos Materiais', '60', NULL, NULL, NULL),
(21, 'Hidráulica I', '60', NULL, NULL, NULL),
(22, 'Saúde Ambiental', '60', NULL, NULL, NULL),
(23, 'Soluções Sanitárias Unidomiciliar Apropriada', '60', NULL, NULL, NULL),
(24, 'Mecânica Dos Solos', '60', NULL, NULL, NULL),
(25, 'Construção Civil', '60', NULL, NULL, NULL),
(26, 'Estrutura do Concreto Armado ', '60', NULL, NULL, NULL),
(27, 'Hidráulica II', '', NULL, NULL, NULL),
(28, 'Analise de Estrutura I', '60', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta`
--

CREATE TABLE `pergunta` (
  `idPergunta` int(11) NOT NULL,
  `perg` varchar(500) NOT NULL,
  `code` varchar(500) DEFAULT NULL,
  `alta` varchar(255) NOT NULL,
  `altb` varchar(255) NOT NULL,
  `altc` varchar(255) NOT NULL,
  `altd` varchar(255) NOT NULL,
  `altCorreta` varchar(255) NOT NULL,
  `justificativa` varchar(500) NOT NULL,
  `fk_idBloco` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pergunta`
--

INSERT INTO `pergunta` (`idPergunta`, `perg`, `code`, `alta`, `altb`, `altc`, `altd`, `altCorreta`, `justificativa`, `fk_idBloco`) VALUES
(1, '<h2>Como se cria uma lista em python ?</h2>', NULL, '<ul>\r\n	<li>lista=[]</li>\r\n</ul>', '<ol>\r\n	<li>lista()</li>\r\n</ol>', '<p><strong>lista{}</strong></p>', '<h3>lista&quot;&quot;</h3>', 'A', 'justificativa', NULL),
(3, 'Pergunta 3', NULL, 'alternativa A', 'alternativa B\r\n', 'alternativa C', 'alternativa D', 'C', 'Justificativa', NULL),
(4, 'Pergunta 4', NULL, 'alternativa A', 'alternativa B\r\n', 'alternativa C', 'alternativa D', 'D', 'Justificativa', NULL),
(5, 'Pergunta 5', NULL, 'alternativa A', 'alternativa B\r\n', 'alternativa C', 'alternativa D', 'A', 'Justificativa', NULL),
(83, 'Qual é a melhor faculdade do Maranhão', NULL, 'CEUMA', 'UFMA', 'UEMA', 'FACAM', 'B', 'Sempre foi a UFMA', NULL),
(84, 'O que é uma sintaxe correta para produzir \"Hello World\" em Python?', NULL, 'echo \"Hello World\"', 'echo(\"Hello World\");', 'print(\"Hello World\")', 'p(\"Hello World\")', 'C', 'Forma Correta print(\"Hello World\")', NULL),
(85, 'Como você insere comentários em código Python?', NULL, '// Comentário', '/* Comentário /*', '#Comentário', '?? Comentário', 'C', 'Forma correta de se escrever um comentário #Comentário', NULL),
(86, 'Qual será a saída para: \r\nraining\'. find(\'z\') ?', NULL, 'Type error', '\'\'', '-1', 'Not found', 'C', 'Se a string não for encontrada pelo método find (), ela retornará o inteiro -1.', NULL),
(87, 'Qual é a saída do seguinte código\r\n', '\r\na = (1, 2)\r\na[0] +=1', '(1,2,3)', '2', 'Error de Tipo', 'Erro de sintaxe', 'C', 'TypeError - O objeto \'tuple\' não suporta atribuição de item porque uma tupla é imutável.', NULL),
(88, ' Como podemos verificar se o objeto é uma instância de classe ou não. Vamos considerar um objeto O que é uma instância da classe B. ', NULL, 'B.isinstance(O)', 'O.isinstance(B)', 'isinstance(O,B)', 'isinstance(B,O)', 'C', 'O método isinstance () é usado para descobrir se o objeto é uma instância de classe ou não', NULL),
(89, 'Qual comando é usado para embaralhar a lista \'L\'?', NULL, 'L.shuffle()', 'random.shufflelist(L)', 'shuffle(L)', 'random.shuffle(L)', 'D', 'Para embaralhar a lista, usamos a função random.shuffle (nome_lista).', NULL),
(90, 'Analise o código:\r\n', 'class Demo: \r\n   def __init__(self,d): \r\n      self.d=d \r\n   def print(self): \r\n      print(d)  \r\na = Demo(\'\'Hello\'\') \r\na.print()', 'Você não pode usar print (self) como nome da função.', 'O programa tem um erro porque a classe A não possui um construtor.', 'Programa imprimirá \'Hello\' se mudarmos print (d) para print (self.d).', 'Erro de sintaxe.', 'C', 'D armazena o valor do argumento aqui. Assim, quando chamamos a classe \'\'Hello\'\' é passado como um argumento que é armazenado na variável d.', NULL),
(91, 'Analise o código', 'print(\"Função Recursiva\") \r\ndef factorial(n): \r\n   return(n*factorial(n-1))  \r\nfactorial(4)', 'Função Recursiva 24', 'Função Recursiva', 'Função é executada infinitamente e faz com que um StackOverflowError.', 'Erro de sintaxe.', 'C', 'não há nenhuma condição no código para parar a função.', NULL),
(92, 'Qual função pode ser usada no arquivo para exibir um diálogo para salvar um arquivo?', '', 'Filename = asksavefilename()', 'Fielname = asksaveasfilename()', 'No such option in python.', 'Filename = savefilename()', 'B', 'Este é o método padrão para exibir um diálogo para salvar um arquivo no módulo Tkinter do Python.', NULL),
(93, ' Qual o caminho entre eles é usado para criar um loop de eventos?', NULL, 'Window.eventloop ()', 'Window.mainloop ()', 'Window.loop ()', 'Eventloop.window ()', 'B', '', NULL),
(94, 'Qual será a saída do código a seguir?', 'minidict = { \'name\': \'TutorialsPoint\', \'name\': \'website\'}\r\nprint(minidict[\'name\'])', 'TutorialsPoint', 'Site', '(\'TutorialsPoint\', \'website\')', 'Isso mostrará um erro.', 'B', 'O dicionário é atualizado pelo código acima conforme a chave recebe um novo valor.', NULL),
(95, 'Analise o código abaixo ', 'x = 1 + 2 ** 3 / 4 * 5\r\nprint(x)', 'x = 11.0', 'x = 1.0', 'x = 5.0', 'x = 15.0', 'A', '', NULL),
(96, 'Analise o código abaixo ', 'X = 10\r\nX = X + 10\r\n', '10', '20', '30', '40', 'B', '', NULL),
(97, 'Analise o código abaixo ', 'x = 1\r\nwhile (x <= 3):\r\n    print(x)\r\n    x = x + 1', '1,2,3', '2,4,6', '3,2,1', '3,6,9', 'A', '', NULL),
(98, 'Analise o código abaixo ', 'variavel = max(\"hello word\")\r\nprint(variavel)', 'w', 'h', 'd', 'o', 'A', '', NULL),
(99, 'Analise o código abaixo ', 'variavel = min(\"hello word\")\r\nprint(variavel)', 'o', '\'  \' ', 'e', 'w', 'B', '', NULL),
(100, 'Analise o código abaixo ', 'def efcol(x):\r\n    print(x**2)\r\nefcol(2)', '2', '8', '4', '2', 'C', '', NULL),
(101, '<p>Analise o c&oacute;digo abaixo</p>', 'fruta = \"Banana\"\r\nprint(fruta[0])\r\n', '<p>Banana</p>', '<p>banana</p>', 'a', '<p>B</p>', 'D', 'justificativa', NULL),
(102, 'Analise o código abaixo ', 'numero = [0,3,14,26,41,63]\r\nnumero[3] = 23\r\n\r\nprint(numero)', '[23,3,14,26,41,63]', '[0,3,23,26,41,63]', '[0,23,14,26,41,63]', '[0, 3, 14, 23, 41, 63]', 'D', '', NULL),
(103, 'Analise o código abaixo ', 'len([0, 3, 14, 23, 41, 63])', '4', '5', '6', '7', 'C', '', NULL),
(104, 'Analise o código abaixo ', 'lista = [1,2,5] + [0,3,4]\r\nprint(lista)', '[1,2,5] + [0,3,4]', '[0,3,4] + [1,2,5]', '[0,3,4,1,2,5]', '[1,2,5,0,3,4]', 'D', '', NULL),
(105, '<h1>Indique a finalidade da seguinte fun&ccedil;&atilde;o:</h1>\r\n\r\n<pre>\r\n<code class=\"language-python\">def imprimir______(n):\r\n    i = 1\r\n    while i&lt;=n:\r\n        print (i)\r\n        i = i+1</code></pre>\r\n\r\n<p>&nbsp;</p>', NULL, '<h2>Imprimir os primeiros n n&uacute;meros naturais pares.</h2>', '<h2>Imprimir os primeiros n n&uacute;meros naturais.</h2>', '<h2>Somar os primeiros n n&uacute;meros inteiros</h2>', '<h2>Imprimir os primeiros n n&uacute;meros inteiros.</h2>', 'B', 'justificativa', NULL),
(106, '<h1>Considerando que estamos em ano de Copa do Mundo, analise a seguinte situa&ccedil;&atilde;o: feita a atribui&ccedil;&atilde;o nome = &ldquo;Brasil&rdquo; , indique o trecho de c&oacute;digo que imprime &quot; Vai Brasil Vai Brasil Vai Brasil&quot;</h1>\r\n\r\n<p>&nbsp;</p>', NULL, '<h2>print(&quot;Vai &quot; + nome * 3)</h2>', '<h2>print((&quot; Vai &quot; + nome) * 3)</h2>', '<h2>&nbsp;print((&quot;Vai &quot; + nome) * 3)</h2>', '<h2>print(nome * 3)</h2>', 'B', 'justificativa', NULL),
(107, '<h1>Qual dos seguintes &eacute; um cabe&ccedil;alho v&aacute;lido de uma fun&ccedil;&atilde;o (a primeira linha da defini&ccedil;&atilde;o da fun&ccedil;&atilde;o)?</h1>\r\n\r\n<p>&nbsp;</p>', NULL, '<h2>def desenhaCirculo(t):</h2>', '<h2>desenhaCirculo(t, raio=5):</h2>', '<h2>def desenhaCirculo(10):</h2>', '<h2>def desenhaCirculo:</h2>', 'A', 'justificativa', NULL),
(108, '<h1>O que &eacute; impresso pelos seguintes comandos:</h1>\r\n\r\n<pre>\r\n<code class=\"language-python\">s = \"pyhton é o melhor\"\r\nprint(s.count(\"o\") + s.count(\"e\"))</code></pre>\r\n\r\n<p>&nbsp;</p>', NULL, '<h2>3</h2>', '<h2>4</h2>', '<h2>1</h2>', '<h2>5</h2>', 'B', 'justificativa', NULL),
(109, '<h1>Considere duas listas A e B representando conjuntos. O seguinte trecho de c&oacute;digo faz o seguinte:</h1>\r\n\r\n<pre>\r\n<code class=\"language-python\">def _____conjuntos(A,B):\r\n    C = [ ]\r\n    for a in A:\r\n        if not a in C:\r\n            C.append(a)\r\n    for b in B:\r\n        if not b in C:\r\n            C.append(b)\r\n    return C</code></pre>\r\n\r\n<p>&nbsp;</p>', NULL, '<h2>Determina se dois conjuntos A e B s&atilde;o iguais.</h2>', '<h2>Faz a intersec&ccedil;&atilde;o dos conjuntos A e B.</h2>', '<h2>Realiza a diferen&ccedil;a entre dois conjuntos A e B.</h2>', '<h2>Faz a uni&atilde;o dos conjuntos A e B.</h2>', 'D', 'justificativa', NULL),
(110, '<h1>Observe cada um dos seguintes comandos em Python:</h1>\r\n\r\n<pre>\r\n<code class=\"language-python\">•     ‘Strings são sequências de caracteres’’[3:6]\r\n•     len(‘maravilhoso’)\r\n•     ‘Mistério’[:4] + ‘Mistério’[5:]\r\n•     ‘apple’ in  ‘Pineapple’\r\n•     ‘pear’ not in ‘Pineapple’</code></pre>\r\n\r\n<h1>A op&ccedil;&atilde;o que cont&eacute;m o resultado da execu&ccedil;&atilde;o correta dos comandos acima &eacute;:</h1>', NULL, '<h2>&lsquo;ing&rsquo;, 11, Mistrio, true, true</h2>', '<h2>&lsquo;ings, 11, &lsquo;Mist&eacute;rio&rsquo;, True, True</h2>', '<h2>&lsquo;ings&rsquo;, 10, &lsquo;Mist&eacute;rio&rsquo;, True, True</h2>', '<h2>&lsquo;ing&rsquo;, 11, &lsquo;Mistrio&rsquo;, True, True</h2>', 'D', 'justificativa', NULL),
(111, '<h1>&nbsp;Qual &eacute; uma das finalidades principais de uma fun&ccedil;&atilde;o?</h1>', NULL, '<h2>Todos os programas em Python devem ser escritos usando fun&ccedil;&otilde;es.</h2>', '<h2>Para calcular valores</h2>', '<h2>Melhorar a velocidade de execu&ccedil;&atilde;o.</h2>', '<h2>&nbsp;Ajudar programadores a organizar programas em m&oacute;dulos que correspondam a como eles pretendem organizar a solu&ccedil;&atilde;o de um problema.</h2>', 'D', 'justificativa', NULL),
(112, '<h1>O que est&aacute; errado com a seguinte defini&ccedil;&atilde;o de fun&ccedil;&atilde;o:</h1>\r\n\r\n<pre>\r\n<code class=\"language-python\">def somaTripla(x, y, z):\r\n     return x+y+z\r\n     print(‘A resposta é’, x+y+z)</code></pre>\r\n\r\n<p>&nbsp;</p>', NULL, '<h2>Uma fun&ccedil;&atilde;o n&atilde;o pode retornar um n&uacute;mero.</h2>', '<h2>Voc&ecirc; n&atilde;o deveria ter nenhum comando na fun&ccedil;&atilde;o depois do comando return. Uma vez que o comando return &eacute; atingido, a execu&ccedil;&atilde;o da fun&ccedil;&atilde;o para imediatamente.</h2>', '<h2>Voc&ecirc; nunca deve usar o comando print em uma defini&ccedil;&atilde;o de fun&ccedil;&atilde;o.</h2>', '<h2>Voc&ecirc; precisa calcular o valor de x+y+z antes de retorn&aacute;-lo.</h2>', 'B', 'justificativa', NULL),
(113, '<h1>Qual a sa&iacute;da do seguinte trecho de c&oacute;digo?</h1>\r\n\r\n<pre>\r\n<code class=\"language-python\">s = \"ball\"\r\nr = \"\"\r\nfor item in s:\r\n   r = item.upper() + r\r\nprint(r)</code></pre>\r\n\r\n<p>&nbsp;</p>', NULL, '<h2>BALL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>', '<h2>Llab&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>', '<h2>Ball&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>', '<h2>LLAB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>', 'D', 'justificativa', NULL),
(114, '<h1>O que &eacute; uma sintaxe correta para produzir &quot;Hello World&quot; em Python?</h1>', NULL, '<pre>\r\n<code class=\"language-php\">echo \"Hello World\"</code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code class=\"language-php\"> print(\"Hello World\") </code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code class=\"language-python\">p(\"Hello World\")</code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code class=\"language-python\">printf(\"Hello World\")</code></pre>\r\n\r\n<p>&nbsp;</p>', 'B', 'justificativa', NULL),
(115, '<h1>O que &eacute; uma sintaxe correta para produzir &quot;Hello World&quot; em Python?</h1>', NULL, '<pre>\r\n<code class=\"language-php\">echo \"Hello World\"</code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code class=\"language-php\"> print(\"Hello World\") </code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code class=\"language-python\">p(\"Hello World\")</code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code class=\"language-python\">printf(\"Hello World\")</code></pre>\r\n\r\n<p>&nbsp;</p>', 'B', 'justificativa', NULL),
(116, '<h1>Qual &eacute; a sa&iacute;da do seguinte c&oacute;digo:</h1>\r\n\r\n<pre>\r\n<code class=\"language-python\">a = (1, 2)\r\na[0] +=1</code></pre>\r\n\r\n<p>&nbsp;</p>', NULL, '<pre>\r\n<code class=\"language-python\">(1,2,3) </code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code class=\"language-python\">2</code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code class=\"language-python\">Error de Tipo</code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code class=\"language-python\">Erro de sintaxe</code></pre>\r\n\r\n<p>&nbsp;</p>', 'C', 'justificativa', NULL),
(117, '<h1>Analise o c&oacute;digo abaixo&nbsp;</h1>\r\n\r\n<pre>\r\n<code class=\"language-python\">x = 1 + 2 ** 3 / 4 * 5\r\nprint(x)</code></pre>\r\n\r\n<p>&nbsp;</p>', NULL, '<pre>\r\n<code class=\"language-python\">x = 11.0</code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code class=\"language-python\">x = 1.0</code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code class=\"language-python\">x = 5.0</code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code class=\"language-python\">x = 15.0</code></pre>\r\n\r\n<p>&nbsp;</p>', 'A', 'justificativa', NULL),
(118, '<h1>Analise o c&oacute;digo abaixo&nbsp;</h1>\r\n\r\n<pre>\r\n<code class=\"language-python\">X = 10\r\nX = X + 10\r\n</code></pre>\r\n\r\n<p>&nbsp;</p>', NULL, '<pre>\r\n<code class=\"language-python\">10</code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code class=\"language-python\">20</code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code class=\"language-python\">30</code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code class=\"language-python\">40</code></pre>\r\n\r\n<p>&nbsp;</p>', 'B', 'justificativa', NULL),
(119, '<h1>Analise o c&oacute;digo abaixo&nbsp;</h1>\r\n\r\n<pre>\r\n<code class=\"language-python\">x = 1\r\nwhile (x &lt;= 3):\r\n    print(x)\r\n    x = x + 1</code></pre>\r\n\r\n<p>&nbsp;</p>', NULL, '<pre>\r\n<code class=\"language-python\">1,2,3</code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code class=\"language-python\">2,4,6</code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code class=\"language-python\">3,2,1</code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code class=\"language-python\">3,6,9</code></pre>\r\n\r\n<p>&nbsp;</p>', 'A', 'justificativa', NULL),
(120, '<h1>Analise o c&oacute;digo abaixo&nbsp;</h1>\r\n\r\n<pre>\r\n<code class=\"language-python\">variavel = max(\"hello word\")\r\nprint(variavel)</code></pre>\r\n\r\n<p>&nbsp;</p>', NULL, '<p>w</p>', '<p>h</p>', '<p>d</p>', '<p>o</p>', 'A', 'justificativa', NULL),
(121, '<h1>Analise o c&oacute;digo abaixo&nbsp;</h1>\r\n\r\n<pre>\r\n<code class=\"language-python\">variavel = min(\"hello word\")\r\nprint(variavel)</code></pre>\r\n\r\n<p>&nbsp;</p>', NULL, '<p>o</p>', '<p>&#39; &#39;</p>', '<p>e</p>', '<p>w</p>', 'B', 'justificativa', NULL),
(122, '<h1>Analise o c&oacute;digo abaixo&nbsp;</h1>\r\n\r\n<pre>\r\n<code class=\"language-python\">def efcol(x):\r\n    print(x**2)\r\nefcol(2)</code></pre>\r\n\r\n<p>&nbsp;</p>', NULL, '<p>2</p>', '<p>8</p>', '<p>4</p>', '<p>3</p>', 'C', 'justificativa', NULL),
(123, '<h1>Analise o c&oacute;digo abaixo&nbsp;</h1>\r\n\r\n<pre>\r\n<code class=\"language-python\">fruta = \"Banana\"\r\nprint(fruta[0])\r\n</code></pre>\r\n\r\n<p>&nbsp;</p>', NULL, '<p>Banana</p>', '<p>banana</p>', '<p>a</p>', '<p>B</p>', 'D', 'justificativa', NULL),
(124, '<h1>Analise o c&oacute;digo abaixo&nbsp;</h1>\r\n\r\n<pre>\r\n<code class=\"language-python\">numero = [0,3,14,26,41,63]\r\nnumero[3] = 23\r\n\r\nprint(numero)</code></pre>\r\n\r\n<p>&nbsp;</p>', NULL, '<pre>\r\n<code class=\"language-python\">[23,3,14,26,41,63]</code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code class=\"language-python\">[0,3,23,26,41,63]</code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code class=\"language-python\">[0,23,14,26,41,63]</code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code>[0, 3, 14, 23, 41, 63]</code></pre>\r\n\r\n<p>&nbsp;</p>', 'D', 'justificativa', NULL),
(125, '<h1>Analise o c&oacute;digo abaixo&nbsp;</h1>\r\n\r\n<pre>\r\n<code class=\"language-python\">lista = [1,2,5] + [0,3,4]\r\n</code></pre>\r\n\r\n<p>&nbsp;</p>', NULL, '<pre>\r\n<code class=\"language-python\">[0,3,4] + [1,2,5]</code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code class=\"language-python\">[0,3,4,1,2,5]</code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code class=\"language-python\">[0,23,14,26,41,63]</code></pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\n<code>[0, 3, 14, 23, 41, 63]</code></pre>\r\n\r\n<p>&nbsp;</p>', 'D', 'justificativa', NULL),
(126, '<h1>Analise o c&oacute;digo abaixo&nbsp;</h1>\r\n\r\n<pre>\r\n<code class=\"language-python\">len([0, 3, 14, 23, 41, 63])</code></pre>\r\n\r\n<p>&nbsp;</p>', NULL, '<p>4</p>', '<p>5</p>', '<p>6</p>', '<p>7</p>', 'C', 'justificativa', NULL),
(127, '<p><img alt=\"\" src=\"https://1h4hfe10xz8m3g3xkh2wb9lc-wpengine.netdna-ssl.com/blog/files/2015/08/thestocks-imagem.jpg\" style=\"height:67px; width:100px\" /></p>', NULL, '<p><img alt=\"\" src=\"https://1h4hfe10xz8m3g3xkh2wb9lc-wpengine.netdna-ssl.com/blog/files/2015/08/thestocks-imagem.jpg\" style=\"height:67px; width:100px\" /></p>', '<p><img alt=\"\" src=\"https://1h4hfe10xz8m3g3xkh2wb9lc-wpengine.netdna-ssl.com/blog/files/2015/08/thestocks-imagem.jpg\" style=\"height:133px; width:200px\" /></p>', '<p><img alt=\"\" src=\"https://1h4hfe10xz8m3g3xkh2wb9lc-wpengine.netdna-ssl.com/blog/files/2015/08/thestocks-imagem.jpg\" style=\"height:333px; width:500px\" /></p>', '<p><img alt=\"\" src=\"https://1h4hfe10xz8m3g3xkh2wb9lc-wpengine.netdna-ssl.com/blog/files/2015/08/thestocks-imagem.jpg\" style=\"height:267px; width:400px\" /></p>', 'B', 'justificativa', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `periodos`
--

CREATE TABLE `periodos` (
  `idPeriodos` int(11) NOT NULL,
  `strperiodo` varchar(8) NOT NULL,
  `incioperiodo` date DEFAULT NULL,
  `fimperiodo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `periodos`
--

INSERT INTO `periodos` (`idPeriodos`, `strperiodo`, `incioperiodo`, `fimperiodo`) VALUES
(1, '2013.1', NULL, NULL),
(2, '2013.2', NULL, NULL),
(3, '2014.1', NULL, NULL),
(4, '2014.2', NULL, NULL),
(5, '2015.1', NULL, NULL),
(6, '2015.2', NULL, NULL),
(7, '2016.1', NULL, NULL),
(8, '2016.2', NULL, NULL),
(9, '2017.1', NULL, NULL),
(10, '2017.2', NULL, NULL),
(11, '2018.1', NULL, NULL),
(12, '2018.2', NULL, NULL),
(13, '2019.1', NULL, NULL),
(14, '2019.2', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontos_usuario`
--

CREATE TABLE `pontos_usuario` (
  `id_pontos_usuario` int(11) NOT NULL,
  `aproveitamento` int(11) DEFAULT NULL,
  `intpontos` int(11) NOT NULL,
  `fk_idusuario` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pontos_usuario`
--

INSERT INTO `pontos_usuario` (`id_pontos_usuario`, `aproveitamento`, `intpontos`, `fk_idusuario`, `created_at`, `updated_at`) VALUES
(20, 83, 5, 28, '2019-08-13 21:01:38', '2019-08-13 21:01:38'),
(21, 67, 4, 28, '2019-08-13 21:05:26', '2019-08-13 21:05:26'),
(22, 83, 5, 28, '2019-08-13 21:05:36', '2019-08-13 21:05:36'),
(23, 100, 6, 28, '2019-08-13 21:05:45', '2019-08-13 21:05:45'),
(24, 117, 7, 28, '2019-08-13 21:05:57', '2019-08-13 21:05:57'),
(25, 133, 8, 28, '2019-08-13 21:06:00', '2019-08-13 21:06:00'),
(26, 150, 9, 28, '2019-08-13 21:06:01', '2019-08-13 21:06:01'),
(27, 167, 10, 28, '2019-08-13 21:06:03', '2019-08-13 21:06:03'),
(28, 183, 11, 28, '2019-08-13 21:06:04', '2019-08-13 21:06:04'),
(29, 200, 12, 28, '2019-08-13 21:06:06', '2019-08-13 21:06:06'),
(30, 100, 6, 28, '2019-08-13 21:17:34', '2019-08-13 21:17:34'),
(31, 83, 5, 28, '2019-08-13 21:19:40', '2019-08-13 21:19:40'),
(32, 83, 5, 28, '2019-08-14 00:13:59', '2019-08-14 00:13:59'),
(33, 83, 5, 28, '2019-08-14 02:27:45', '2019-08-14 02:27:45'),
(34, 83, 5, 28, '2019-08-14 02:30:05', '2019-08-14 02:30:05'),
(35, 67, 4, 28, '2019-08-15 20:35:45', '2019-08-15 20:35:45'),
(36, 67, 4, 28, '2019-08-20 23:26:36', '2019-08-20 23:26:36'),
(37, 50, 1, 28, '2019-08-23 06:54:57', '2019-08-23 06:54:57'),
(38, 0, 0, 28, '2019-08-23 06:55:10', '2019-08-23 06:55:10'),
(39, 50, 1, 28, '2019-08-23 06:55:28', '2019-08-23 06:55:28'),
(40, 50, 1, 28, '2019-08-23 06:56:29', '2019-08-23 06:56:29'),
(41, 100, 2, 28, '2019-08-23 06:56:41', '2019-08-23 06:56:41'),
(42, 100, 2, 28, '2019-08-23 06:57:03', '2019-08-23 06:57:03'),
(43, 100, 2, 28, '2019-08-23 06:57:17', '2019-08-23 06:57:17'),
(44, 100, 2, 28, '2019-08-23 06:58:51', '2019-08-23 06:58:51'),
(45, 100, 2, 28, '2019-08-23 06:59:09', '2019-08-23 06:59:09'),
(46, 100, 2, 28, '2019-08-23 06:59:29', '2019-08-23 06:59:29'),
(47, 100, 2, 28, '2019-08-23 06:59:53', '2019-08-23 06:59:53'),
(48, 50, 1, 28, '2019-08-24 01:14:04', '2019-08-24 01:14:04'),
(49, 100, 2, 28, '2019-08-24 01:14:25', '2019-08-24 01:14:25'),
(50, 100, 2, 28, '2019-08-24 01:25:08', '2019-08-24 01:25:08'),
(51, 100, 2, 28, '2019-08-24 01:25:36', '2019-08-24 01:25:36'),
(52, 90, 9, 28, '2019-08-25 20:22:12', '2019-08-25 20:22:12'),
(53, 60, 6, 28, '2019-08-25 20:39:29', '2019-08-25 20:39:29'),
(54, 60, 6, 31, '2019-08-26 12:17:36', '2019-08-26 12:17:36'),
(55, 10, 1, 31, '2019-08-26 12:18:44', '2019-08-26 12:18:44'),
(56, 20, 2, 33, '2019-08-26 21:13:16', '2019-08-26 21:13:16'),
(57, 10, 1, 33, '2019-08-26 21:14:02', '2019-08-26 21:14:02'),
(58, 60, 6, 34, '2019-08-26 21:21:52', '2019-08-26 21:21:52'),
(59, 80, 8, 34, '2019-08-26 21:26:04', '2019-08-26 21:26:04'),
(60, 20, 2, 36, '2019-08-27 01:56:28', '2019-08-27 01:56:28'),
(61, 0, 0, 31, '2019-08-28 14:23:13', '2019-08-28 14:23:13'),
(62, 10, 1, 36, '2019-08-28 22:00:55', '2019-08-28 22:00:55'),
(63, 70, 7, 31, '2019-09-10 02:06:22', '2019-09-10 02:06:22'),
(64, 50, 5, 31, '2019-09-10 02:11:27', '2019-09-10 02:11:27'),
(65, 0, 0, 31, '2019-09-12 23:03:02', '2019-09-12 23:03:02'),
(66, 20, 2, 31, '2019-09-16 18:51:16', '2019-09-16 18:51:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `respondidas_usuario`
--

CREATE TABLE `respondidas_usuario` (
  `id_respondidas_usuario` int(11) NOT NULL,
  `fk_idusuario` int(11) NOT NULL,
  `fk_idpergunta` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `respondidas_usuario`
--

INSERT INTO `respondidas_usuario` (`id_respondidas_usuario`, `fk_idusuario`, `fk_idpergunta`, `created_at`, `updated_at`) VALUES
(197, 28, 91, NULL, NULL),
(198, 28, 92, NULL, NULL),
(199, 28, 85, NULL, NULL),
(200, 28, 93, NULL, NULL),
(201, 28, 1, NULL, NULL),
(202, 28, 90, NULL, NULL),
(203, 28, 5, NULL, NULL),
(204, 28, 94, NULL, NULL),
(205, 28, 87, NULL, NULL),
(206, 28, 88, NULL, NULL),
(387, 33, 83, NULL, NULL),
(388, 33, 92, NULL, NULL),
(389, 33, 91, NULL, NULL),
(390, 33, 93, NULL, NULL),
(391, 33, 1, NULL, NULL),
(392, 33, 94, NULL, NULL),
(393, 33, 84, NULL, NULL),
(394, 33, 90, NULL, NULL),
(395, 33, 88, NULL, NULL),
(396, 33, 4, NULL, NULL),
(407, 34, 87, NULL, NULL),
(408, 34, 94, NULL, NULL),
(409, 34, 83, NULL, NULL),
(410, 34, 3, NULL, NULL),
(411, 34, 5, NULL, NULL),
(412, 34, 1, NULL, NULL),
(413, 34, 86, NULL, NULL),
(414, 34, 92, NULL, NULL),
(415, 34, 89, NULL, NULL),
(416, 34, 85, NULL, NULL),
(437, 35, 88, NULL, NULL),
(438, 35, 4, NULL, NULL),
(439, 35, 3, NULL, NULL),
(440, 35, 5, NULL, NULL),
(441, 35, 89, NULL, NULL),
(442, 35, 93, NULL, NULL),
(443, 35, 85, NULL, NULL),
(444, 35, 91, NULL, NULL),
(445, 35, 1, NULL, NULL),
(446, 35, 86, NULL, NULL),
(487, 36, 5, NULL, NULL),
(488, 36, 88, NULL, NULL),
(489, 36, 4, NULL, NULL),
(490, 36, 3, NULL, NULL),
(491, 36, 1, NULL, NULL),
(492, 36, 87, NULL, NULL),
(493, 36, 91, NULL, NULL),
(494, 36, 93, NULL, NULL),
(495, 36, 85, NULL, NULL),
(496, 36, 86, NULL, NULL),
(1237, 31, 3, NULL, NULL),
(1238, 31, 118, NULL, NULL),
(1239, 31, 103, NULL, NULL),
(1240, 31, 108, NULL, NULL),
(1241, 31, 102, NULL, NULL),
(1242, 31, 1, NULL, NULL),
(1243, 31, 121, NULL, NULL),
(1244, 31, 111, NULL, NULL),
(1245, 31, 114, NULL, NULL),
(1246, 31, 89, NULL, NULL),
(1247, 31, 100, NULL, NULL),
(1248, 31, 107, NULL, NULL),
(1249, 31, 96, NULL, NULL),
(1250, 31, 104, NULL, NULL),
(1251, 31, 99, NULL, NULL),
(1252, 31, 120, NULL, NULL),
(1253, 31, 116, NULL, NULL),
(1254, 31, 123, NULL, NULL),
(1255, 31, 115, NULL, NULL),
(1256, 31, 97, NULL, NULL),
(1257, 31, 105, NULL, NULL),
(1258, 31, 95, NULL, NULL),
(1259, 31, 126, NULL, NULL),
(1260, 31, 94, NULL, NULL),
(1261, 31, 101, NULL, NULL),
(1262, 31, 91, NULL, NULL),
(1263, 31, 112, NULL, NULL),
(1264, 31, 113, NULL, NULL),
(1265, 31, 110, NULL, NULL),
(1266, 31, 85, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `score`
--

CREATE TABLE `score` (
  `idScore` int(11) NOT NULL,
  `fk_idPessoa` int(11) NOT NULL,
  `pontos` int(11) NOT NULL,
  `aproveitamento` int(11) NOT NULL,
  `data` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `score`
--

INSERT INTO `score` (`idScore`, `fk_idPessoa`, `pontos`, `aproveitamento`, `data`) VALUES
(23, 44, 10, 0, '2019-01-03 13:51:45'),
(26, 44, 15, 0, '2019-01-03 13:56:45'),
(27, 44, 5, 0, '2019-01-03 16:13:05'),
(28, 44, 10, 0, '2019-01-03 16:13:05'),
(29, 44, 10, 0, '2019-01-03 16:16:35'),
(30, 44, 15, 0, '2019-01-03 16:16:35'),
(31, 44, 16, 0, '2019-01-03 16:16:35'),
(32, 44, 17, 0, '2019-01-03 16:16:35'),
(33, 44, 18, 0, '2019-01-03 16:16:35'),
(34, 44, 18, 0, '2019-01-03 16:16:35'),
(35, 44, 19, 0, '2019-01-03 16:16:35'),
(36, 44, 20, 0, '2019-01-03 16:16:35'),
(37, 44, 20, 0, '2019-01-03 16:16:35'),
(38, 44, 20, 0, '2019-01-03 16:16:35'),
(39, 44, 20, 0, '2019-01-03 16:16:35'),
(40, 44, 0, 0, '2019-01-05 13:52:18'),
(41, 44, 1, 0, '2019-01-08 23:05:32'),
(42, 55, 1, 0, '2019-02-12 13:53:32'),
(43, 55, 10, 0, '2019-02-12 13:55:31'),
(44, 55, 30, 0, '2019-02-12 13:55:58'),
(45, 55, 20, 0, '2019-02-12 13:55:58');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `strnomeusuario` varchar(255) DEFAULT NULL,
  `stremailusuario` varchar(255) NOT NULL,
  `fk_idperiodo` varchar(45) CHARACTER SET big5 NOT NULL,
  `strsenha` varchar(500) NOT NULL,
  `fk_idengenharia` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `strnomeusuario`, `stremailusuario`, `fk_idperiodo`, `strsenha`, `fk_idengenharia`, `created_at`, `updated_at`) VALUES
(28, 'Isabelly Abreu Reis', 'abreuisabelly80@gmail.com', '14', '$2y$10$XgLACF0TcecV8btlHmOQeuxttzeOnkI1bt2CpsSC.8PudDJl/cLQK', 3, '2019-07-27 22:41:15', '2019-08-14 02:25:08'),
(29, 'Guilherme', 'gui@gmail.com', '11', '$2y$10$oJOXw.XhvLf2SJ7VGDrRnuRw4J628gmiql.KT6792bYJGBNOHNK06', 3, '2019-08-06 23:35:30', '2019-08-06 23:35:30'),
(31, 'Billyfranklim Avelino Pereira', 'billyfranklim@gmail.com', '13', '$2y$10$5yk9bOLssich4eAo/Wu0cuFwm.aprxNVaNs6vNPOsfX4qKPXoOl5i', 1, '2019-08-25 23:00:35', '2019-08-25 23:06:01'),
(32, 'Franklim', 'billy_franklim@hotmail.com', '12', '$2y$10$pnCiSKGtB4.dott6Rm.ba.g0SpdrmC6zRYhsT3J7OIvI2sV7LKy/K', 1, '2019-08-25 23:11:02', '2019-08-25 23:11:26'),
(33, 'Aridson Nunes Fernandes Filho', 'aridsonfilho@gmail.com', '9', '$2y$10$dcuT1z2QJF54gU0ZOMzJyOyFK6Mohi.u6ThobCNyrx8HzGnKKi3Zq', 1, '2019-08-26 21:11:57', '2019-08-26 21:11:57'),
(34, 'Lionel Messi', 'lionel.messi@barcelona.com', '9', '$2y$10$a4ZXdoSqlPtBIztdGAuvQe32PLnYcQEOo3OtX99MakYo4zoTgY56i', 1, '2019-08-26 21:16:52', '2019-08-26 21:16:52'),
(35, 'pierguinzani@gmail.com', 'pierguinzani@gmail.com', '14', '$2y$10$CbVf3zJVqPUI4NHfsEbwpOnHi9b3O67qyG48Kk.ebprSGxGwKzDOq', 1, '2019-08-26 22:47:11', '2019-08-26 22:47:11'),
(36, 'Lucas Magalhães', 'lucasmagalhesjc@gmail.com', '12', '$2y$10$tOJciLmtacLTTU9Ga.EdreUX4gUN.MRuZqnclToeVhvxm7TG.5yZC', 1, '2019-08-27 01:54:02', '2019-08-27 01:54:02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_optativas`
--

CREATE TABLE `usuario_optativas` (
  `id_usuario_optativas` int(11) NOT NULL,
  `fk_idusuario` int(11) NOT NULL,
  `fk_idoptativa` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disciplina_usuario`
--
ALTER TABLE `disciplina_usuario`
  ADD PRIMARY KEY (`id_usuario_obrigatoria`),
  ADD KEY `disciplina_usuario_ibfk_2` (`disciplina_idDisciplina`),
  ADD KEY `usuario_usuario_obrigatoria_ibfk_1` (`usuario_idUsuarios`);

--
-- Indexes for table `engenharias`
--
ALTER TABLE `engenharias`
  ADD PRIMARY KEY (`idEngenharia`);

--
-- Indexes for table `engenharia_optativas`
--
ALTER TABLE `engenharia_optativas`
  ADD PRIMARY KEY (`id_engenharia_optativas`),
  ADD KEY `fk_idengenharia` (`fk_idengenharia`),
  ADD KEY `fk_idoptativa` (`fk_idoptativa`);

--
-- Indexes for table `logAcesso`
--
ALTER TABLE `logAcesso`
  ADD PRIMARY KEY (`idlogacesso`);

--
-- Indexes for table `logacesso`
--
ALTER TABLE `logacesso`
  ADD PRIMARY KEY (`idlogacesso`);

--
-- Indexes for table `obrigatorias`
--
ALTER TABLE `obrigatorias`
  ADD PRIMARY KEY (`idDiciplina`);

--
-- Indexes for table `optativas`
--
ALTER TABLE `optativas`
  ADD PRIMARY KEY (`idOptativa`);

--
-- Indexes for table `pergunta`
--
ALTER TABLE `pergunta`
  ADD PRIMARY KEY (`idPergunta`);

--
-- Indexes for table `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`idPeriodos`);

--
-- Indexes for table `pontos_usuario`
--
ALTER TABLE `pontos_usuario`
  ADD PRIMARY KEY (`id_pontos_usuario`),
  ADD KEY `fk_idusuario` (`fk_idusuario`);

--
-- Indexes for table `respondidas_usuario`
--
ALTER TABLE `respondidas_usuario`
  ADD PRIMARY KEY (`id_respondidas_usuario`),
  ADD KEY `fk_idusuario` (`fk_idusuario`),
  ADD KEY `fk_idpergunta` (`fk_idpergunta`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`idScore`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`),
  ADD KEY `fk_idengenharia` (`fk_idengenharia`);

--
-- Indexes for table `usuario_optativas`
--
ALTER TABLE `usuario_optativas`
  ADD PRIMARY KEY (`id_usuario_optativas`),
  ADD KEY `fk_idusuario` (`fk_idusuario`),
  ADD KEY `fk_idoptativa` (`fk_idoptativa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disciplina_usuario`
--
ALTER TABLE `disciplina_usuario`
  MODIFY `id_usuario_obrigatoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `engenharias`
--
ALTER TABLE `engenharias`
  MODIFY `idEngenharia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `engenharia_optativas`
--
ALTER TABLE `engenharia_optativas`
  MODIFY `id_engenharia_optativas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `logAcesso`
--
ALTER TABLE `logAcesso`
  MODIFY `idlogacesso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `logacesso`
--
ALTER TABLE `logacesso`
  MODIFY `idlogacesso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `obrigatorias`
--
ALTER TABLE `obrigatorias`
  MODIFY `idDiciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `optativas`
--
ALTER TABLE `optativas`
  MODIFY `idOptativa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `pergunta`
--
ALTER TABLE `pergunta`
  MODIFY `idPergunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT for table `periodos`
--
ALTER TABLE `periodos`
  MODIFY `idPeriodos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pontos_usuario`
--
ALTER TABLE `pontos_usuario`
  MODIFY `id_pontos_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `respondidas_usuario`
--
ALTER TABLE `respondidas_usuario`
  MODIFY `id_respondidas_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1267;
--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `idScore` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `usuario_optativas`
--
ALTER TABLE `usuario_optativas`
  MODIFY `id_usuario_optativas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `disciplina_usuario`
--
ALTER TABLE `disciplina_usuario`
  ADD CONSTRAINT `disciplina_usuario_ibfk_1` FOREIGN KEY (`usuario_idUsuarios`) REFERENCES `usuarios` (`idUsuarios`),
  ADD CONSTRAINT `disciplina_usuario_ibfk_2` FOREIGN KEY (`disciplina_idDisciplina`) REFERENCES `obrigatorias` (`idDiciplina`);

--
-- Limitadores para a tabela `engenharia_optativas`
--
ALTER TABLE `engenharia_optativas`
  ADD CONSTRAINT `engenharia_optativas_ibfk_1` FOREIGN KEY (`fk_idengenharia`) REFERENCES `engenharias` (`idEngenharia`),
  ADD CONSTRAINT `engenharia_optativas_ibfk_2` FOREIGN KEY (`fk_idoptativa`) REFERENCES `optativas` (`idOptativa`);

--
-- Limitadores para a tabela `pontos_usuario`
--
ALTER TABLE `pontos_usuario`
  ADD CONSTRAINT `pontos_usuario_ibfk_1` FOREIGN KEY (`fk_idusuario`) REFERENCES `usuarios` (`idUsuarios`);

--
-- Limitadores para a tabela `respondidas_usuario`
--
ALTER TABLE `respondidas_usuario`
  ADD CONSTRAINT `respondidas_usuario_ibfk_1` FOREIGN KEY (`fk_idusuario`) REFERENCES `usuarios` (`idUsuarios`),
  ADD CONSTRAINT `respondidas_usuario_ibfk_2` FOREIGN KEY (`fk_idpergunta`) REFERENCES `pergunta` (`idPergunta`);

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`fk_idengenharia`) REFERENCES `engenharias` (`idEngenharia`);

--
-- Limitadores para a tabela `usuario_optativas`
--
ALTER TABLE `usuario_optativas`
  ADD CONSTRAINT `usuario_optativas_ibfk_1` FOREIGN KEY (`fk_idusuario`) REFERENCES `usuarios` (`idUsuarios`),
  ADD CONSTRAINT `usuario_optativas_ibfk_2` FOREIGN KEY (`fk_idoptativa`) REFERENCES `optativas` (`idOptativa`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

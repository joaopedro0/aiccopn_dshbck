-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Jul-2019 às 18:04
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consulta`
--
CREATE DATABASE IF NOT EXISTS `consulta` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `consulta`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `CodCliente` int(9) UNSIGNED NOT NULL,
  `Nome` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `DataNascimento` date NOT NULL,
  `Morada` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `DataAdmissao` date NOT NULL,
  `DataInicioFuncao` date NOT NULL,
  `Funcao` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Localidade` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Nif` int(9) UNSIGNED NOT NULL,
  `CodEmpresa` int(9) UNSIGNED NOT NULL,
  `Email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`CodCliente`, `Nome`, `DataNascimento`, `Morada`, `DataAdmissao`, `DataInicioFuncao`, `Funcao`, `Localidade`, `Nif`, `CodEmpresa`, `Email`) VALUES
(5, 'Marcos Vieira de Reis', '2014-11-27', 'Largo São. Vanessa', '2016-12-03', '2001-06-16', 'Human Resources Specialist', 'Barcelos', 17309985, 86, 'neves.nuno@sousa.com'),
(7, 'António Filipe Fernandes de Leite', '2007-06-09', 'Largo São. Simão', '1972-11-09', '1987-07-30', 'Door To Door Sales', 'São Mamede de Infesta', 990004332, 88, 'cunha.erica@macedo.c'),
(8, 'Daniela Leite', '2012-10-09', 'Rua Matheus Branco', '1996-07-19', '1979-12-24', 'Glass Blower', 'Valbom', 990088184, 74, 'mario.paiva@paiva.co'),
(9, 'Igor Artur Freitas Campos', '1982-03-06', 'Avenida St. Gonçalo Miranda', '1981-05-15', '1980-12-19', 'Construction', 'Póvoa de Santa Iria', 495030518, 67, 'martinho88@hotmail.c'),
(10, 'Violeta Soraia Brito Henriques Nasciment', '2013-07-16', 'Av. Antunes', '1998-06-22', '1989-02-15', 'Program Director', '\0Vila Real de Santo António', 748999512, 32, 'alice07@yahoo.com'),
(11, 'Diogo Benjamim Domingues Loureiro', '2016-10-21', 'Av. Cunha', '2012-01-27', '2001-11-01', 'Building Inspector', 'Ourém', 229783487, 81, 'salome95@hotmail.com'),
(12, 'Leonardo Morais Batista', '1971-07-08', 'Travessa de Neves', '1992-08-18', '1994-04-18', 'Stevedore', '\0Fátima', 503411858, 82, 'bruna31@hotmail.com'),
(14, 'Rúben Martins Borges', '2001-10-29', 'Rua São. Eva', '2012-01-10', '2003-03-08', 'Annealing Machine Operator', 'Mealhada', 49948846, 90, 'sara.sousa@neto.info'),
(15, 'William Nogueira Pinto', '1988-07-16', 'Rua de Amorim', '1973-09-08', '2011-01-01', 'Tank Car', '\0Bragança', 42074622, 45, 'fmaia@branco.com'),
(16, 'Carolina Iris Neves Reis', '2000-09-11', 'R. São. Érika', '1972-06-10', '1988-01-03', 'Marine Cargo Inspector', 'Seia', 931118980, 59, 'debora03@hotmail.com'),
(17, 'Matilde Alves', '2000-03-30', 'R. St. Raúl Assunção', '1990-06-04', '1974-04-23', 'Market Research Analyst', 'Santa Cruz', 109031950, 18, 'neves.martim@moreira'),
(18, 'Gustavo Emanuel Araújo', '1983-02-06', 'Travessa de Ferreira', '1999-07-30', '1982-04-28', 'Operating Engineer', '\0Camara de Lobos', 348998683, 78, 'joaquim.antunes@teix'),
(19, 'Íris Matos', '2011-04-28', 'Av. de Domingues', '1982-02-20', '2014-08-10', 'Optical Instrument Assembler', 'Silves', 590825425, 6, 'filipa.garcia@gmail.'),
(20, 'César Sebastião de Marques', '1971-03-02', 'Largo São. António', '2007-11-27', '2012-05-23', 'Librarian', '\0Camara de Lobos', 76911719, 69, 'cristiano57@yahoo.co'),
(21, 'Margarida Júlia Ferreira', '1978-05-11', 'Avenida de Silva', '1973-09-16', '1996-06-17', 'Mining Engineer OR Geological ', '\0Portimão', 314100016, 51, 'kelly.azevedo@gmail.'),
(22, 'Sérgio Sá de Cunha', '1975-05-27', 'R. São. Wilson', '1999-04-04', '1983-09-09', 'Stock Clerk', '\0Fátima', 12168748, 74, 'nogueira.melissa@gma'),
(23, 'Lisandro Cardoso', '2009-04-06', 'Largo Leite', '1978-03-30', '1999-03-25', 'Warehouse', 'Setúbal', 310374625, 41, 'maria32@yahoo.com'),
(24, 'César Torres Reis', '2015-08-18', 'Travessa São. Raúl', '2004-08-11', '2011-11-23', 'Dietetic Technician', '\0Gouveia', 191518329, 83, 'laura.neto@almeida.i'),
(25, 'Irina Alícia Martins Pinheiro Barbosa', '1996-06-02', 'Travessa Joana Moura', '2018-02-07', '1995-06-26', 'Pediatricians', '\0Quarteira', 802518122, 93, 'carvalho.liliana@mon'),
(26, 'Manuel Rodrigo Magalhães', '1986-07-27', 'Largo São. Márcio', '2006-10-11', '2016-05-28', 'Municipal Court Clerk', '\0Fundão', 724956138, 44, 'claudia.amaral@gmail'),
(27, 'Leandro André de Almeida', '1970-07-07', 'Travessa São. Victória', '2005-03-03', '2000-04-25', 'Precision Instrument Repairer', 'Oliveira do Hospital', 317016980, 54, 'davi.neves@gmail.com'),
(28, 'Mateus Melo Pacheco', '1970-03-28', 'Rua Gustavo Carvalho', '2019-02-20', '1984-08-21', 'Bindery Worker', 'Chaves', 905782246, 95, 'marco.miranda@yahoo.'),
(29, 'Renata Camila Cunha Cardoso Henriques', '2013-11-05', 'Avenida Marta Antunes', '1971-03-22', '1994-04-10', 'Music Director', '\0Rio Maior', 426171475, 81, 'liliana97@yahoo.com'),
(30, 'Duarte Coelho de Jesus', '2019-02-24', 'Rua Rocha', '2011-06-26', '1987-02-25', 'CEO', 'Marinha Grande', 403613724, 12, 'efreitas@paiva.info'),
(31, 'Samuel Gonçalves', '1971-07-14', 'Largo Matias', '1974-06-15', '1983-10-19', 'Logging Equipment Operator', '\0Coimbra', 357821475, 45, 'violeta63@gmail.com'),
(32, 'Raquel Paiva de Oliveira', '2018-11-01', 'Rua David Teixeira', '1997-04-12', '2015-10-05', 'Custom Tailor', 'Vendas Novas', 601230343, 50, 'dpacheco@yahoo.com'),
(33, 'Joel Torres de Loureiro', '2015-03-15', 'Largo Filipe Coelho', '2015-02-24', '1971-09-26', 'Environmental Scientist', '\0Vila Franca de Xira', 765072750, 56, 'amaral.neuza@branco.'),
(34, 'Mariana Ramos', '2001-01-19', 'Avenida São. Inês', '1999-08-06', '1970-12-22', 'Animal Control Worker', 'Peso da Régua', 627926586, 39, 'passuncao@gmail.com'),
(35, 'Madalena Rafaela Fonseca de Nascimento', '1970-05-14', 'R. Sousa', '1996-02-18', '1998-05-02', 'Maintenance Supervisor', '\0Cartaxo', 802570388, 57, 'duarte.pinheiro@alme'),
(36, 'Sara Neto Lourenço', '1971-10-10', 'Rua São. Martinho', '1977-08-12', '1970-09-25', 'Real Estate Broker', '\0Entroncamento', 108152678, 61, 'rafaela11@gmail.com'),
(37, 'Jorge Fábio Alves', '2012-10-26', 'Rua Débora Vaz', '2014-05-07', '2018-11-15', 'Gas Appliance Repairer', '\0Vila Franca de Xira', 896194779, 56, 'veronica71@anjos.com'),
(38, 'Márcio Lisandro Borges Fernandes Pereir', '1990-01-28', 'Travessa de Batista', '2006-08-11', '2012-05-04', 'Pastry Chef', 'Guarda', 359967127, 17, 'pinto.bianca@antunes'),
(39, 'Paulo Magalhães Reis', '1975-12-14', 'Av. Sandro Guerreiro', '2018-12-21', '1973-04-23', 'Furnace Operator', '\0Paredes', 440080683, 17, 'macedo.anna@gmail.co'),
(40, 'Santiago André Machado Borges Almeida', '1995-09-16', 'Travessa Domingues', '2001-03-26', '1971-01-17', 'Brickmason', 'Oliveira de Azeméis', 990369866, 53, 'jfonseca@miranda.biz'),
(41, 'Ricardo Alexandre Carneiro Vicente', '1972-11-02', 'Travessa Maia', '1999-04-09', '1998-11-18', 'Electro-Mechanical Technician', 'Almada', 61489370, 87, 'kguerreiro@hotmail.c'),
(42, 'Laura Miriam Guerreiro Magalhães', '1984-10-09', 'R. Ângelo Leite', '2000-12-04', '1997-04-12', 'Ship Engineer', '\0Figueira da Foz', 985402080, 91, 'machado.alicia@guerr'),
(43, 'Filipa Miranda Macedo', '2015-11-03', 'Rua Joel Pinho', '1987-12-02', '1982-07-21', 'Locomotive Firer', '\0Mirandela', 720453555, 43, 'esteves.flavio@olive'),
(44, 'Benjamim Daniel Reis Leal', '2003-06-01', 'R. São. Henrique', '2002-07-10', '1997-09-22', 'Custom Tailor', 'Beja', 435960621, 83, 'moreira.pedro@hotmai'),
(45, 'Mafalda Mafalda Ferreira Nogueira Cruz', '1970-03-01', 'Rua de Amaral', '1977-08-28', '2015-01-16', 'Eligibility Interviewer', '\0Vila Franca de Xira', 724012201, 18, 'anjos.fabio@azevedo.'),
(46, 'Paulo Vicente Azevedo', '1986-04-11', 'Largo St. Maria Branco', '1979-10-14', '1973-12-07', 'Art Director', 'Oliveira de Azeméis', 529064876, 3, 'magalhaes.renato@rei'),
(47, 'Hélder Telmo Loureiro', '1996-02-25', 'Avenida Vicente', '2009-09-18', '1974-11-29', 'Battery Repairer', '\0Valongo', 985149768, 14, 'vcampos@gmail.com'),
(48, 'Doriana Teixeira Alves', '1986-10-11', 'Rua São. Kelly', '2002-05-08', '1978-12-07', 'Dispatcher', '\0Figueira da Foz', 470391031, 8, 'sgaspar@hotmail.com'),
(49, 'Rodrigo Filipe Figueiredo Ribeiro Pinho', '1985-11-08', 'Av. de Cruz', '2017-02-03', '1997-12-15', 'Massage Therapist', '\0Machico', 430032418, 76, 'martim33@domingues.n'),
(50, 'Hélder Henrique Vicente Assunção Marq', '1981-04-07', 'Rua Carvalho', '1981-09-05', '1972-08-06', 'Taper', '\0Elvas', 811838078, 20, 'fonseca.sandro@gmail'),
(51, 'Artur Matheus Gaspar de Loureiro', '2013-10-18', 'Rua Miranda', '2001-01-08', '1996-07-17', 'Licensed Practical Nurse', 'Seixal', 393820265, 56, 'matias.domingues@sim'),
(52, 'Eduarda Viviane Batista', '2000-02-27', 'R. Lima', '1986-04-03', '1986-08-07', 'Locker Room Attendant', '\0Moura', 274202034, 11, 'batista.salome@vicen'),
(53, 'Rafaela Helena Batista Ramos Amorim', '2010-07-21', 'R. de Figueiredo', '1972-12-15', '1999-03-05', 'Sawing Machine Setter', 'Guimarães', 276537068, 77, 'barros.francisca@mac'),
(54, 'Vanessa Matias', '1987-09-01', 'Rua de Lourenço', '1988-07-12', '2006-04-04', 'Telephone Operator', '\0Alverca do Ribatejo', 875042944, 100, 'tavares.matilde@hotm'),
(55, 'David Lourenço Coelho Simões', '2011-09-02', 'R. de Cruz', '1998-01-30', '1984-04-24', 'Architect', 'Chaves', 692441675, 25, 'pinto.ruben@andrade.'),
(56, 'Benjamim Filipe de Leal', '1994-03-27', 'Avenida Lourenço', '1997-10-20', '2013-01-03', 'Food Science Technician', '\0Santo Tirso', 470280822, 71, 'vcarvalho@andrade.or'),
(57, 'Guilherme Faria', '1997-11-16', 'Largo St. Marcos Gonçalves', '1996-05-22', '2007-11-09', 'Crushing Grinding Machine Oper', '\0Vila Nova de Foz Côa', 869882230, 74, 'dinis77@silva.com'),
(58, 'Xavier Márcio Leite de Fernandes', '1996-11-07', 'Rua St. Bruna Fernandes', '1989-01-13', '1984-10-31', 'Segmental Paver', '\0Alcobaça', 198391077, 78, 'artur57@gmail.com'),
(59, 'Frederico Frederico Cunha de Assunção', '1992-09-14', 'R. Matilde Simões', '2011-11-11', '2000-04-23', 'Athletes and Sports Competitor', 'Oliveira do Hospital', 734538328, 99, 'figueiredo.victoria@'),
(60, 'Irina Figueiredo Monteiro', '1998-09-05', 'Largo St. Mateus Cunha', '2000-02-21', '1987-08-28', 'Pantograph Engraver', 'Santa Comba Dão', 746953431, 33, 'joel.sa@hotmail.com'),
(61, 'Ema Lopes Ribeiro', '1989-05-23', 'R. de Gaspar', '1976-09-17', '2000-07-28', 'Proofreaders and Copy Marker', 'Valbom', 877991675, 39, 'raquel.amaral@yahoo.'),
(63, 'Eduardo Luís Batista', '1988-02-25', 'Largo St. Luís Araújo', '1983-08-21', '1997-05-31', 'Loan Officer', 'Covilhã', 612013042, 99, 'enzo48@amorim.biz'),
(64, 'Isabel Rocha', '2015-11-09', 'Av. de Torres', '1997-08-14', '2016-10-06', 'Horticultural Worker', '\0Quarteira', 594176946, 33, 'guerreiro.yara@hotma'),
(65, 'Joaquim William Cunha de Carneiro', '1992-05-27', 'Rua St. Mia Moreira', '1986-10-23', '2000-05-13', 'Motorcycle Mechanic', '\0Sines', 855835377, 93, 'mariana92@hotmail.co'),
(66, 'Maria Ariana Guerreiro Cunha', '2016-09-13', 'Avenida Pinho', '1989-09-29', '1974-11-11', 'Aircraft Structure Assemblers', '\0Camara de Lobos', 152574167, 33, 'emota@hotmail.com'),
(67, 'Ema Alícia Freitas Gomes Amorim', '1989-12-07', 'Largo Machado', '2011-08-03', '1984-10-15', 'Biomedical Engineer', '\0Coimbra', 110887191, 88, 'kelly.lopes@mendes.b'),
(68, 'Cláudia Alexandra Simões Pacheco', '1974-10-29', 'Travessa St. Gaspar Silva', '2005-09-05', '1987-03-18', 'Protective Service Worker', 'Gafanha da Nazaré', 716198850, 34, 'gpinho@yahoo.com'),
(69, 'Maria Kyara Batista', '2001-04-03', 'Avenida Filipe Maia', '1984-08-29', '1992-11-29', 'Septic Tank Servicer', 'Oliveira de Azeméis', 656354687, 76, 'rocha.andre@santos.n'),
(70, 'David Joel de Machado', '1992-05-06', 'R. São. Carlos', '1976-07-21', '1997-11-13', 'Special Education Teacher', 'Setúbal', 346633504, 34, 'nogueira.davi@coelho'),
(71, 'Isabel Luciana de Cruz', '2008-05-19', 'Travessa St. Letícia Macedo', '1989-07-15', '1996-09-02', 'Sys Admin', 'Paços de Ferreira', 38997265, 6, 'svicente@gmail.com'),
(72, 'Isaac Esteves Sousa', '1985-04-09', 'Av. Anjos', '1981-08-17', '1984-02-10', 'Purchasing Agent', 'Pombal', 59171842, 78, 'vera58@hotmail.com'),
(73, 'Alexandre Andrade Mota', '2010-05-08', 'Av. São. Sofia', '1988-03-30', '1970-06-27', 'Clinical School Psychologist', '\0Figueira da Foz', 35836452, 23, 'daniel02@martins.net'),
(74, 'Eva Débora de Silva', '1977-06-07', 'Travessa de Moreira', '1991-10-02', '1989-02-04', 'Maid', 'Évora', 732129386, 47, 'lima.matias@esteves.'),
(75, 'Viviane Constança Barbosa Sá Matias', '2006-12-26', 'Travessa de Moura', '2010-05-23', '1996-10-03', 'Automotive Glass Installers', 'Ovar', 738901967, 12, 'david.vaz@hotmail.co'),
(76, 'Vasco Pereira de Anjos', '1970-07-04', 'R. São. Filipe', '1981-06-28', '2002-04-14', 'Massage Therapist', '\0Tarouca', 745407137, 22, 'pleite@alves.com'),
(77, 'Rafael Cardoso de Fonseca', '1990-04-22', 'Avenida Matos', '1986-02-22', '1987-01-25', 'Auditor', '\0Amadora', 984288402, 82, 'renata64@yahoo.com'),
(78, 'Raquel Vaz de Neto', '2004-10-11', 'Av. Cruz', '1977-03-06', '2004-03-04', 'Production Laborer', 'Portalegre', 452056386, 68, 'ytavares@macedo.com'),
(79, 'Mónica Cátia de Guerreiro', '1987-08-08', 'R. de Reis', '1980-10-29', '1989-11-04', 'Fashion Designer', 'Valbom', 989171712, 53, 'cruz.ricardo@castro.'),
(80, 'João Esteves de Rodrigues', '1993-07-28', 'Travessa St. Verónica Maia', '1996-10-14', '2011-10-22', 'Welfare Eligibility Clerk', '\0Porto', 789134832, 6, 'tome12@hotmail.com'),
(81, 'Kelly Carolina Figueiredo', '1995-08-14', 'R. Machado', '1989-08-09', '2018-05-20', 'Software Engineer', '\0Santarém', 225119987, 72, 'vasco76@hotmail.com'),
(82, 'Alícia Maia', '1996-02-10', 'Avenida Magalhães', '1972-06-16', '1986-11-15', 'Teacher', 'Peso da Régua', 215229157, 14, 'paulo47@hotmail.com'),
(83, 'Tiago Pires de Batista', '1983-11-17', 'Rua São. Vítor', '1979-06-20', '2017-10-09', 'Sales Person', 'Chaves', 619475281, 87, 'umartins@araujo.org'),
(84, 'Samuel Davi Castro Morais Brito', '1976-06-26', 'R. Álvaro Macedo', '1993-06-01', '1995-07-05', 'Floral Designer', 'Vizela', 974356085, 18, 'hgoncalves@hotmail.c'),
(85, 'Inês Clara Lima Melo Cruz', '1994-06-14', 'Travessa de Coelho', '1992-04-19', '1977-10-10', 'Cultural Studies Teacher', 'Felgueiras', 695562883, 90, 'uhenriques@almeida.o'),
(86, 'Leandro Wilson Carneiro Batista Freitas', '2012-02-20', 'Rua Faria', '1970-11-24', '2009-02-09', 'Maintenance Equipment Operator', '\0Espinho', 884912623, 76, 'cteixeira@hotmail.co'),
(87, 'Tomás Marco Gonçalves Mendes Anjos', '2017-01-19', 'Largo Jéssica Valente', '1971-06-27', '1989-10-15', 'Painter', 'Vila Praia da Vitória', 138729204, 73, 'afonso.vieira@rodrig'),
(88, 'Matheus Marcos Matias Fernandes Nascimen', '2001-11-05', 'Travessa Matias', '1977-03-29', '1970-06-11', 'Technical Program Manager', 'Fafe', 990751006, 63, 'mateus.santos@rodrig'),
(89, 'Fabiana Cunha', '1977-03-19', 'Avenida Enzo Assunção', '2008-12-20', '2013-05-06', 'Internist', '\0Montemor-o-Novo', 270673986, 10, 'pinheiro.neuza@ferre'),
(90, 'Rita Cardoso de Antunes', '2014-03-23', 'Av. Ivo Fonseca', '1988-07-14', '2000-10-28', 'Nursery Worker', '\0Viseu', 178883653, 5, 'nrodrigues@branco.co'),
(91, 'William António Pinho de Castro', '1972-07-30', 'Avenida São. Matias', '1991-04-11', '1995-01-26', 'Computer Hardware Engineer', '\0Machico', 588469034, 10, 'joaquim23@gaspar.net'),
(92, 'Luna Baptista', '1989-08-18', 'Rua St. Fernando Campos', '2014-06-20', '2007-09-15', 'Logging Tractor Operator', '\0Rio Maior', 293071028, 32, 'rita37@esteves.com'),
(93, 'Hugo Castro de Antunes', '2013-06-27', 'Rua São. Ana', '1995-12-05', '1976-06-09', 'Child Care Worker', '\0Albufeira', 879009603, 5, 'diogo20@borges.biz'),
(94, 'Santiago Jorge de Moura', '2014-10-16', 'Avenida de Almeida', '2017-01-17', '2002-10-15', 'Motorcycle Mechanic', 'Santa Comba Dão', 878192413, 27, 'apacheco@hotmail.com'),
(95, 'Raúl Alexandre Matos Gaspar Santos', '2008-06-11', 'R. St. Joel Pinho', '1997-08-03', '1994-03-30', 'Ship Pilot', '\0Tarouca', 970768285, 91, 'qlopes@gmail.com'),
(96, 'Gaspar Azevedo de Pinheiro', '1993-07-28', 'Travessa Emanuel Batista', '1986-10-12', '1995-09-15', 'Craft Artist', 'Almada', 10669338, 74, 'silva.francisco@lope'),
(97, 'Duarte Vicente de Figueiredo', '2001-08-30', 'Avenida São. Duarte', '1980-09-12', '1982-10-20', 'Insurance Investigator', 'Caldas da Rainha', 128561625, 89, 'rpacheco@neves.com'),
(99, 'Liliana Azevedo de Cardoso', '1973-06-08', 'Largo Macedo', '1980-07-27', '2001-02-11', 'Bridge Tender OR Lock Tender', 'Silves', 449324410, 13, 'veronica.carneiro@fa'),
(100, 'Fabiana Rita Mota Moura', '1998-07-09', 'Rua Amaral', '2012-08-30', '1989-04-11', 'Roofer', '\0Montijo', 77737789, 86, 'sbrito@ferreira.biz'),
(115, 'Pedro Antunes', '1992-04-02', 'Rua do Bepis', '2008-03-12', '2008-05-23', 'Software Engineer', 'Porto', 582910392, 2, 'pedro.antunes@gmail.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clinicas`
--

CREATE TABLE `clinicas` (
  `CodClinica` int(9) UNSIGNED NOT NULL,
  `Nome` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Nif` int(9) UNSIGNED NOT NULL,
  `Morada` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Localidade` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clinicas`
--

INSERT INTO `clinicas` (`CodClinica`, `Nome`, `Nif`, `Morada`, `Localidade`) VALUES
(3, 'Márcio Nelson Valente Neves.clinica', 841752026, 'R. de Vaz', 'Oliveira do Hospital'),
(4, 'Hugo Vasco Leal Lourenço.clinica', 251184130, 'Av. Morais', 'Fiães'),
(5, 'Benedita Martins de Azevedo.clinica', 17309985, 'Avenida St. Cláudia Fonseca', 'Lisboa'),
(6, 'Érika Érica de Anjos.clinica', 424922756, 'Av. São. Denis', 'Freamunde'),
(7, 'Raquel Joana Magalhães Anjos.clinica', 990004332, 'Rua de Vaz', 'Leiria'),
(8, 'Raúl Campos Amaral.clinica', 990088184, 'R. Nádia Martins', 'Fafe'),
(10, 'Raúl Carlos Loureiro.clinica', 748999512, 'R. São. Flávio', 'Torres Novas'),
(11, 'Joel Raúl Simões de Torres.clinica', 229783487, 'Av. Pinho', 'Estarreja'),
(12, 'Hugo Paulo Mota Esteves.clinica', 503411858, 'Av. São. Cátia', 'Vila Nova de Foz Côa'),
(13, 'Alice Silva de Fonseca.clinica', 2815285, 'Rua Matilde Marques', 'Montijo'),
(14, 'Camila Anjos de Pinho.clinica', 49948846, 'Rua João Batista', 'Santo Tirso'),
(15, 'Leonor Amaral.clinica', 42074622, 'Travessa Alexandre Garcia', 'São João da Madeira'),
(16, 'Nuno Sebastião Pereira Machado.clinica', 931118980, 'Largo de Matos', 'Lixa'),
(17, 'Micael Bruno Teixeira.clinica', 109031950, 'R. Garcia', 'Espinho'),
(18, 'André Santiago Martins.clinica', 348998683, 'Rua St. Gabriel Ramos', 'Cantanhede'),
(19, 'Hélder Flávio Lopes Pacheco Marques.cl', 590825425, 'Av. Henriques', 'Póvoa de Varzim'),
(20, 'Teresa Bárbara Loureiro de Reis.clinica', 76911719, 'Largo Tiago Cruz', 'Santa Cruz'),
(22, 'Violeta Barros Ribeiro.clinica', 12168748, 'Rua Alves', 'Ermesinde'),
(23, 'Gil Marcos Correia.clinica', 310374625, 'Travessa St. Gabriela Amorim', 'Fafe'),
(24, 'Manuel Micael Almeida de Marques.clinica', 191518329, 'Travessa de Cruz', 'Pombal'),
(25, 'Santiago Amaral.clinica', 802518122, 'Travessa St. Miriam Martins', 'Lagos'),
(26, 'Diana Alice Gonçalves Ferreira Pacheco.', 724956138, 'Travessa São. Rúben', 'Mangualde'),
(27, 'Artur Moreira Faria.clinica', 317016980, 'Av. de Almeida', 'Quarteira'),
(28, 'Raquel Isabela Assunção Teixeira Pinto', 905782246, 'Avenida Gil Pinheiro', 'Porto Santo'),
(29, 'Luana Antunes de Neto.clinica', 426171475, 'R. Paiva', 'São João da Madeira'),
(30, 'Mateus Cristiano Vieira.clinica', 403613724, 'Travessa Ema Rocha', 'Ermesinde'),
(31, 'Leonardo Amorim Lima.clinica', 357821475, 'Av. António Valente', 'São João da Madeira'),
(32, 'Mariana Leonor Loureiro de Vaz.clinica', 601230343, 'Avenida Soares', 'Valbom'),
(33, 'Benjamim Gil Pinho Carvalho Anjos.clinic', 765072750, 'Avenida Ivan Batista', 'Vila Nova de Famalicão'),
(34, 'Alice Faria de Teixeira.clinica', 627926586, 'Av. Amorim', 'Lourosa'),
(35, 'Juliana Leonor Mendes.clinica', 802570388, 'Largo St. Salvador Borges', 'Agualva-Cacém'),
(36, 'Lourenço Gil Cruz.clinica', 108152678, 'Travessa St. Alexandre Soares', 'Funchal'),
(37, 'Gustavo Branco Nunes.clinica', 896194779, 'Avenida Pinto', 'Gafanha da Nazaré'),
(38, 'Mateus Simão Rodrigues Ferreira.clinica', 359967127, 'R. de Silva', 'Quarteira'),
(39, 'Camila Lorena Ribeiro.clinica', 440080683, 'Travessa St. Yasmin Moreira', 'Portimão'),
(40, 'Sara Sara Cunha Gonçalves.clinica', 990369866, 'Rua St. Matias Gomes', 'Esmoriz'),
(41, 'Erica Mia Moura.clinica', 61489370, 'Av. São. Letícia', 'São Mamede de Infesta'),
(42, 'Mia Mara Gaspar de Gaspar.clinica', 985402080, 'Largo St. Daniel Brito', 'Portalegre'),
(43, 'Márcio Joaquim Araújo.clinica', 720453555, 'Av. de Guerreiro', 'Paredes'),
(44, 'Beatriz Neves.clinica', 435960621, 'Travessa St. Yara Barros', 'Vila do Conde'),
(46, 'Madalena Joana Sousa Carvalho.clinica', 529064876, 'Travessa Carneiro', 'Valbom'),
(47, 'Luna Débora de Santos.clinica', 985149768, 'Travessa Leal', 'Pombal'),
(48, 'Santiago Martim Mota de Lopes.clinica', 470391031, 'Rua Melo', 'Macedo de Cavaleiros'),
(49, 'Marco Pinheiro Baptista.clinica', 430032418, 'Rua Ribeiro', 'Marinha Grande'),
(50, 'Rafaela Anna Assunção de Cruz.clinica', 811838078, 'Avenida Correia', 'Agualva-Cacém'),
(51, 'Gaspar Cardoso Barros.clinica', 393820265, 'Largo Pacheco', 'Seia'),
(52, 'Mélanie Bianca de Moura.clinica', 274202034, 'Largo de Anjos', 'Pombal'),
(53, 'Gabriel Borges.clinica', 276537068, 'Av. Ariana Esteves', 'Santarém'),
(54, 'Cristiana Anjos Fonseca.clinica', 875042944, 'Largo de Leal', 'Espinho'),
(55, 'Camila Laura Pinheiro de Domingues.clini', 692441675, 'R. St. Ana Fernandes', 'São Mamede de Infesta'),
(56, 'Micael Isaac Moura Baptista.clinica', 470280822, 'Travessa de Rocha', 'Tarouca'),
(57, 'Mia Fabiana Pinto de Antunes.clinica', 869882230, 'Av. São. Victória', 'Vila Real'),
(58, 'Mara Andrade de Vicente.clinica', 198391077, 'Avenida Miranda', 'Aveiro'),
(59, 'Ivo Nuno Moura de Tavares.clinica', 734538328, 'Av. São. Lara', 'Gondomar'),
(60, 'Hélder Matos Pacheco.clinica', 746953431, 'Rua São. Rúben', 'Ovar'),
(61, 'Patrícia Matias Torres.clinica', 877991675, 'R. St. Núria Jesus', 'Esmoriz'),
(62, 'Gonçalo Edgar Pires de Esteves.clinica', 785501510, 'R. St. Gil Ramos', 'Gouveia'),
(63, 'Iris Alice Nunes.clinica', 612013042, 'Av. de Brito', 'Seixal'),
(64, 'Andreia Mota Lopes.clinica', 594176946, 'R. Débora Martins', 'Guimarães'),
(65, 'Neuza Luciana Borges Magalhães Freitas.', 855835377, 'Avenida de Faria', 'Fiães'),
(66, 'João Ramos Santos.clinica', 152574167, 'Avenida São. António', 'Beja'),
(67, 'Luísa Ema Fonseca.clinica', 110887191, 'Av. St. Violeta Ribeiro', 'Agualva-Cacém'),
(68, 'Rafael Pacheco de Vaz.clinica', 716198850, 'Rua São. Ângela', 'Fiães'),
(69, 'Rafael Costa Nascimento.clinica', 656354687, 'R. São. Luísa', 'Porto Santo'),
(70, 'Valentim Leal.clinica', 346633504, 'Largo de Teixeira', 'Ponte de Sor'),
(71, 'Rita Salomé Fonseca Batista Neto.clinic', 38997265, 'Rua Freitas', 'Rio Tinto'),
(72, 'Wilson Renato Amaral de Amaral.clinica', 59171842, 'R. Joaquim Moura', 'Viseu'),
(73, 'Álvaro Gaspar Jesus Nogueira.clinica', 35836452, 'Travessa Faria', 'Peso da Régua'),
(74, 'Helena Anna Lopes Azevedo.clinica', 732129386, 'Largo St. António Mendes', 'Águeda'),
(75, 'Renata Mafalda Matias de Cardoso.clinica', 738901967, 'Largo Rita Araújo', 'Sacavém'),
(76, 'Anna Diana de Lima.clinica', 745407137, 'Largo St. Tiago Costa', 'Freamunde'),
(77, 'Dinis Rúben Moreira Cardoso.clinica', 984288402, 'Avenida Valente', 'Queluz'),
(78, 'Érica Pereira de Costa.clinica', 452056386, 'Largo de Machado', 'Coimbra'),
(79, 'César Faria Valente.clinica', 989171712, 'Av. Manuel Baptista', 'Penafiel'),
(80, 'Juliana Branco de Maia.clinica', 789134832, 'Travessa Valente', 'Castelo Branco'),
(81, 'William Matias Macedo Leite Gonçalves.c', 225119987, 'R. de Costa', 'Porto Santo'),
(83, 'Viviane Abreu de Brito.clinica', 619475281, 'Travessa São. Martinho', 'Santiago do Cacém'),
(84, 'Maria Eduarda Simões.clinica', 974356085, 'Rua St. Gil Mendes', 'Rio Maior'),
(85, 'Lucas Vicente Rodrigues.clinica', 695562883, 'Rua Luna Sá', 'Barcelos'),
(86, 'Mónica Cátia Melo Anjos Pinto.clinica', 884912623, 'Av. St. Mateus Rodrigues', 'Vila Nova de Gaia'),
(87, 'Érika Campos de Matos.clinica', 138729204, 'Largo Campos', 'Queluz'),
(88, 'Helena Melo.clinica', 990751006, 'Largo São. Eduarda', 'Anadia'),
(89, 'Júlia Lia de Moura.clinica', 270673986, 'R. Oliveira', 'Mangualde'),
(90, 'Mário Magalhães.clinica', 178883653, 'R. Guerreiro', 'Paços de Ferreira'),
(91, 'Marco Wilson Martins Garcia.clinica', 588469034, 'Av. Helena Soares', 'Peso da Régua'),
(92, 'Vanessa Simões de Correia.clinica', 293071028, 'Travessa Mota', 'Matosinhos'),
(93, 'Bruna Madalena Mota Simões Valente.clin', 879009603, 'Travessa Tavares', 'Rio Maior'),
(94, 'Maria Lopes de Macedo.clinica', 878192413, 'Largo Iara Sá', 'Felgueiras'),
(95, 'Luana Mariana de Almeida.clinica', 970768285, 'Travessa Hugo Santos', 'Alcácer do Sal'),
(96, 'Vítor Pires Martins.clinica', 10669338, 'R. Almeida', 'Sacavém'),
(97, 'César Lourenço de Moreira.clinica', 128561625, 'Travessa São. Diana', 'Porto'),
(98, 'Ivo Gaspar Loureiro Garcia Mendes.clinic', 642819641, 'R. St. Afonso Costa', 'São Mamede de Infesta'),
(99, 'Salomé Victória Nunes de Leal.clinica', 449324410, 'R. St. Joaquim Macedo', 'Montijo'),
(100, 'Rebeca Verónica Pereira de Esteves.clin', 77737789, 'Av. de Garcia', 'Horta'),
(115, 'Clinica da Liga', 482719058, 'Avenida da Republica', 'Vila Nova de Gaia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultas`
--

CREATE TABLE `consultas` (
  `CodConsulta` int(9) UNSIGNED NOT NULL,
  `CodCliente` int(9) UNSIGNED NOT NULL,
  `CodClinica` int(9) UNSIGNED NOT NULL,
  `DataExame` date NOT NULL,
  `Preco` int(6) UNSIGNED NOT NULL,
  `Hora` time NOT NULL,
  `TipoExame` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `consultas`
--

INSERT INTO `consultas` (`CodConsulta`, `CodCliente`, `CodClinica`, `DataExame`, `Preco`, `Hora`, `TipoExame`) VALUES
(1, 32, 35, '2019-06-13', 142, '15:00:00', '2'),
(5, 100, 5, '0000-00-00', 9414, '14:33:30', '2'),
(10, 96, 8, '0000-00-00', 10852, '14:49:11', '3'),
(13, 56, 19, '0000-00-00', 78980, '18:13:33', '2'),
(18, 68, 8, '0000-00-00', 61749, '19:45:23', '1'),
(23, 37, 8, '0000-00-00', 25328, '18:42:43', '3'),
(26, 14, 85, '0000-00-00', 2327, '01:54:57', '3'),
(28, 18, 38, '0000-00-00', 13604, '00:25:59', '3'),
(30, 37, 83, '0000-00-00', 39318, '02:37:15', '2'),
(33, 58, 40, '0000-00-00', 56389, '04:58:37', '2'),
(35, 29, 39, '0000-00-00', 84318, '10:23:49', '3'),
(36, 49, 76, '0000-00-00', 1679, '21:10:47', '3'),
(37, 35, 17, '0000-00-00', 72172, '17:21:42', '3'),
(38, 25, 57, '0000-00-00', 27311, '13:21:57', '2'),
(39, 86, 31, '0000-00-00', 65317, '04:00:23', '1'),
(40, 87, 6, '0000-00-00', 98576, '05:45:15', '2'),
(41, 28, 36, '0000-00-00', 69583, '19:14:16', '2'),
(42, 89, 48, '0000-00-00', 74754, '05:08:41', '1'),
(43, 48, 38, '0000-00-00', 60737, '18:22:42', '3'),
(46, 59, 75, '0000-00-00', 10771, '11:12:10', '1'),
(50, 97, 16, '0000-00-00', 33655, '21:11:57', '1'),
(51, 23, 40, '0000-00-00', 94470, '01:45:39', '3'),
(52, 17, 89, '0000-00-00', 88501, '08:06:40', '3'),
(54, 97, 81, '0000-00-00', 99562, '06:54:06', '3'),
(55, 83, 38, '0000-00-00', 30208, '03:00:35', '1'),
(57, 91, 50, '0000-00-00', 74542, '02:48:59', '2'),
(59, 11, 24, '0000-00-00', 49148, '12:19:37', '2'),
(60, 45, 84, '0000-00-00', 30954, '16:09:09', '3'),
(62, 9, 28, '0000-00-00', 78469, '03:22:14', '3'),
(63, 46, 53, '0000-00-00', 48825, '08:00:54', '3'),
(64, 12, 33, '0000-00-00', 56959, '10:06:50', '1'),
(65, 77, 77, '0000-00-00', 34700, '13:38:27', '1'),
(66, 39, 10, '0000-00-00', 33911, '08:38:04', '1'),
(67, 19, 24, '0000-00-00', 63354, '05:37:27', '1'),
(68, 49, 17, '0000-00-00', 48956, '20:44:42', '2'),
(70, 18, 59, '0000-00-00', 61160, '23:26:55', '2'),
(71, 86, 80, '0000-00-00', 62773, '12:28:24', '3'),
(72, 8, 57, '0000-00-00', 23147, '14:57:01', '1'),
(73, 49, 55, '0000-00-00', 56293, '10:08:01', '2'),
(74, 63, 75, '0000-00-00', 16520, '19:44:54', '3'),
(75, 53, 55, '0000-00-00', 55777, '00:02:37', '1'),
(76, 72, 54, '0000-00-00', 27436, '16:24:02', '1'),
(77, 17, 34, '0000-00-00', 87544, '17:36:18', '1'),
(78, 26, 69, '0000-00-00', 20057, '17:13:13', '2'),
(80, 59, 50, '0000-00-00', 7961, '10:08:21', '3'),
(81, 23, 77, '0000-00-00', 24561, '18:42:03', '3'),
(82, 14, 61, '0000-00-00', 64242, '13:57:16', '2'),
(85, 36, 91, '0000-00-00', 34869, '02:10:12', '3'),
(86, 18, 95, '0000-00-00', 18615, '23:05:49', '2'),
(87, 19, 14, '0000-00-00', 33305, '08:21:33', '2'),
(89, 29, 31, '0000-00-00', 22887, '09:45:51', '3'),
(90, 71, 100, '0000-00-00', 64781, '07:56:27', '2'),
(91, 11, 34, '0000-00-00', 81266, '18:20:04', '3'),
(93, 44, 59, '0000-00-00', 29603, '06:34:45', '3'),
(96, 9, 56, '0000-00-00', 88569, '03:30:46', '3'),
(97, 19, 48, '0000-00-00', 95907, '10:04:55', '2'),
(98, 36, 36, '0000-00-00', 93015, '16:38:35', '1'),
(99, 85, 31, '0000-00-00', 20054, '23:04:08', '1'),
(100, 86, 36, '0000-00-00', 97176, '00:41:26', '2'),
(192, 32, 41, '2019-02-04', 1312, '10:32:21', '1'),
(195, 24, 23, '2019-02-09', 131, '13:02:09', '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `CodEmpresa` int(9) UNSIGNED NOT NULL,
  `Nome` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Nif` int(9) UNSIGNED NOT NULL,
  `Morada` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Localidade` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`CodEmpresa`, `Nome`, `Nif`, `Morada`, `Localidade`) VALUES
(1, 'Santos PLC', 422864004, 'Largo São. Diana', 'São Mamede de Infesta'),
(2, 'Jesus, Ferreira and Campos', 708329876, 'Largo Rúben Vaz', 'Vila Franca de Xira'),
(3, 'Andrade Ltd', 341853754, 'Largo Teresa Reis', 'Pombal'),
(4, 'Melo-Moreira', 896399797, 'Rua Rocha', 'Angra do Heroísmo'),
(5, 'Carvalho-Matos', 522841353, 'Rua São. Marco', 'Gondomar'),
(6, 'Loureiro, Branco and Lima', 456982159, 'R. St. Rui Baptista', 'Cantanhede'),
(7, 'Almeida, Garcia and Tavares', 332031678, 'Largo Rocha', 'Lisboa'),
(8, 'Antunes-Araújo', 270759651, 'R. St. Cristiana Morais', 'Albufeira'),
(9, 'Torres, Amaral and Faria', 463036820, 'Rua St. Valentim Pires', 'Seia'),
(10, 'Ribeiro and Sons', 758393881, 'Rua Pacheco', 'Portimão'),
(11, 'Sousa, Figueiredo and Matias', 885277961, 'Largo Carvalho', 'Horta'),
(12, 'Sousa-Moreira', 583180001, 'Largo Neto', 'Gafanha da Nazaré'),
(13, 'Nascimento, Morais and Branco', 499503901, 'Avenida Oliveira', 'Pinhel'),
(14, 'Nunes, Matias and Reis', 483841183, 'Av. Mariana Machado', 'Camara de Lobos'),
(17, 'Figueiredo, Faria and Fonseca', 287917378, 'Rua Salvador Domingues', 'Vila Real de Santo António'),
(18, 'Leal-Pinto', 447264473, 'Avenida Flávio Castro', 'Tarouca'),
(19, 'Ferreira, Coelho and Paiva', 760903984, 'Av. de Nascimento', 'Pinhel'),
(20, 'Esteves, Moreira and Melo', 390559923, 'Travessa de Amaral', 'Beja'),
(22, 'Campos, Guerreiro and Costa', 383145402, 'R. St. Francisca Matos', 'Amadora'),
(23, 'Cardoso, Fonseca and Vicente', 280943148, 'Largo São. Débora', 'Gafanha da Nazaré'),
(24, 'Esteves, Pinto and Lourenço', 175197001, 'Av. Sandro Reis', 'Vila Nova de Gaia'),
(25, 'Amorim, Ferreira and Guerreiro', 925691042, 'Av. de Soares', 'Ponta Delgada'),
(26, 'Ribeiro-Gonçalves', 253985590, 'Travessa Vasco Figueiredo', 'Tomar'),
(27, 'Neves, Guerreiro and Gomes', 172988581, 'Rua Figueiredo', 'Anadia'),
(28, 'Ferreira-Neto', 77131097, 'Rua Batista', 'Macedo de Cavaleiros'),
(29, 'Neto Group', 496070443, 'Avenida Freitas', 'Caldas da Rainha'),
(30, 'Monteiro, Vicente and Gaspar', 227152479, 'Travessa São. César', 'Esposende'),
(31, 'Antunes, Cunha and Amaral', 20045515, 'Travessa São. Wilson', 'Estarreja'),
(32, 'Simões, Guerreiro and Oliveira', 136104204, 'Largo St. Matheus Amorim', 'Alcobaça'),
(33, 'Soares Inc', 171326233, 'Av. de Abreu', 'Póvoa de Santa Iria'),
(34, 'Santos Ltd', 122116282, 'Avenida Ana Andrade', 'Ponte de Sor'),
(35, 'Amorim, Freitas and Carvalho', 685214903, 'Travessa Pinho', 'Vila do Conde'),
(36, 'Valente, Antunes and Lourenço', 298595344, 'Rua de Esteves', 'Maia'),
(37, 'Branco-Araújo', 859121241, 'Travessa Gaspar Amorim', 'Almada'),
(38, 'Melo-Pinheiro', 552538174, 'Av. St. Carlos Neves', 'Seixal'),
(39, 'Correia, Henriques and Lopes', 551064576, 'Rua Sousa', 'Fundão'),
(40, 'Tavares Inc', 720183982, 'Rua Barros', 'Tavira'),
(41, 'Baptista-Nascimento', 798452452, 'Av. Carvalho', 'Silves'),
(42, 'Machado, Amaral and Vaz', 563536831, 'Travessa Xavier Machado', 'Maia'),
(43, 'Sousa-Carvalho', 963451507, 'R. Nelson Mendes', 'Elvas'),
(44, 'Domingues-Pinto', 692938507, 'Travessa de Rocha', 'Pombal'),
(45, 'Neto and Sons', 217146204, 'Travessa St. Flávio Andrade', 'Loures'),
(46, 'Almeida Group', 796491498, 'Travessa Mário Monteiro', 'Porto'),
(47, 'Cardoso-Antunes', 881837679, 'Avenida Alexandre Barros', 'Anadia'),
(48, 'Carneiro Inc', 479015447, 'Largo São. Verónica', 'Espinho'),
(49, 'Jesus and Sons', 274648679, 'Largo de Brito', 'Fátima'),
(50, 'Lopes, Leite and Monteiro', 343333978, 'Av. de Maia', 'Faro'),
(51, 'Cruz-Branco', 663743019, 'Rua de Borges', 'Pombal'),
(52, 'Reis-Matos', 385111670, 'Av. St. Alexandre Morais', 'Fiães'),
(53, 'Matos, Faria and Monteiro', 846246393, 'Rua Cristiano Coelho', 'Seixal'),
(54, 'Silva Group', 898300528, 'Travessa de Pinheiro', 'Torres Novas'),
(55, 'Mota LLC', 901223545, 'Travessa Constança Nunes', 'Amora'),
(56, 'Tavares PLC', 988807880, 'R. St. Leandro Miranda', 'Porto'),
(57, 'Borges-Brito', 349287067, 'Rua St. Carlota Alves', 'Loulé'),
(58, 'Faria, Rodrigues and Machado', 821016538, 'Avenida St. Francisco Cardoso', 'Rio Tinto'),
(59, 'Lima, Amorim and Cruz', 943829470, 'Rua St. Vasco Barbosa', 'Guimarães'),
(60, 'Loureiro Group', 561230687, 'Av. São. Constança', 'Tarouca'),
(61, 'Figueiredo, Henriques and Batista', 880140871, 'Largo St. Joel Reis', 'Vila Real'),
(62, 'Reis, Machado and Freitas', 347061598, 'Rua St. Ricardo Melo', 'Machico'),
(63, 'Rocha, Cunha and Cunha', 518907804, 'Avenida St. Frederico Santos', 'Agualva-Cacém'),
(64, 'Paiva-Matos', 947573818, 'R. Henriques', 'Viseu'),
(65, 'Matos LLC', 586905868, 'Rua São. Vicente', 'Portimão'),
(66, 'Vicente, Anjos and Baptista', 435267738, 'R. de Loureiro', 'Anadia'),
(67, 'Leite, Esteves and Martins', 610245571, 'R. São. Isaac', 'Vila Praia da Vitória'),
(68, 'Leite, Almeida and Macedo', 192340199, 'R. São. Mia', 'Tomar'),
(69, 'Assunção, Teixeira and Leite', 288821608, 'Largo São. Salvador', 'Lamego'),
(70, 'Brito-Amorim', 595721184, 'Rua St. Santiago Campos', 'Agualva-Cacém'),
(71, 'Reis-Anjos', 652105007, 'Travessa São. Doriana', 'Valongo'),
(72, 'Vaz PLC', 443031396, 'Largo St. Davi Oliveira', 'Almeirim'),
(73, 'Morais PLC', 568473719, 'Rua Luís Miranda', 'Setúbal'),
(74, 'Ramos PLC', 575818983, 'Rua São. Eduarda', 'Funchal'),
(75, 'Carneiro-Batista', 284392649, 'Largo São. Violeta', 'Peniche'),
(76, 'Simões Ltd', 48807340, 'R. Gonçalves', 'Entroncamento'),
(77, 'Cardoso-Pereira', 648064519, 'Av. Lorena Amaral', 'Aveiro'),
(78, 'Teixeira, Assunção and Simões', 112384210, 'Av. St. Cláudia Abreu', 'Guimarães'),
(79, 'Marques, Esteves and Macedo', 589277011, 'Av. Campos', 'Miranda do Douro'),
(80, 'Carvalho LLC', 123620087, 'Rua de Branco', 'Guarda'),
(81, 'Lourenço-Baptista', 334071844, 'R. São. Ana', 'Queluz'),
(82, 'Amaral Ltd', 927302743, 'Largo St. Francisca Jesus', 'Anadia'),
(83, 'Barros and Sons', 29633328, 'Av. de Leite', 'Angra do Heroísmo'),
(84, 'Simões and Sons', 125791347, 'R. St. William Leal', 'Braga'),
(85, 'Nascimento-Vaz', 2886349, 'Travessa Matilde Gonçalves', 'Silves'),
(86, 'Soares-Pinto', 957823285, 'Rua Lopes', 'Alverca do Ribatejo'),
(87, 'Esteves Inc', 961815229, 'R. Rodrigo Campos', 'Cantanhede'),
(88, 'Domingues-Gonçalves', 316012356, 'Rua São. Isabela', 'Machico'),
(89, 'Ramos LLC', 752483008, 'R. de Correia', 'Agualva-Cacém'),
(90, 'Andrade-Batista', 640527173, 'Avenida São. Salomé', 'Barcelos'),
(91, 'Lourenço, Azevedo and Coelho', 596003832, 'Largo St. Kyara Cardoso', 'Almeirim'),
(92, 'Abreu-Barros', 803416430, 'Rua Benjamim Pinto', 'Vale de Cambra'),
(93, 'Freitas-Figueiredo', 418909392, 'R. Correia', 'Gafanha da Nazaré'),
(94, 'Cardoso and Sons', 319811562, 'Avenida Eduardo Castro', 'Silves'),
(95, 'Pereira, Moura and Nascimento', 577794139, 'R. St. Renata Baptista', 'Fiães'),
(96, 'Simões PLC', 393688056, 'R. São. Rita', 'Ponte de Sor'),
(97, 'Andrade-Torres', 347664870, 'Rua São. Gabriela', 'Tondela'),
(98, 'Antunes-Amorim', 436656740, 'Largo Barros', 'Guarda'),
(99, 'Ramos Inc', 951206480, 'Largo Marques', 'Silves'),
(100, 'Reis-Figueiredo', 317472479, 'Av. Pinho', 'Machico'),
(115, 'João Teste', 950281728, 'Rua do Pardal', 'Porto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE `utilizadores` (
  `ID` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`ID`, `username`, `password`) VALUES
(1, 'utilizador.dev', 'dev@aiccopn'),
(2, 'utilizador', 'eu@aiccopn'),
(3, 'teste', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`CodCliente`),
  ADD KEY `fx_cod_empe` (`CodEmpresa`);

--
-- Indexes for table `clinicas`
--
ALTER TABLE `clinicas`
  ADD PRIMARY KEY (`CodClinica`);

--
-- Indexes for table `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`CodConsulta`),
  ADD KEY `fx_cod_clin` (`CodClinica`),
  ADD KEY `fx_cod_client` (`CodCliente`);

--
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`CodEmpresa`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `fx_cod_empe` FOREIGN KEY (`CodEmpresa`) REFERENCES `empresas` (`CodEmpresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `consultas`
--
ALTER TABLE `consultas`
  ADD CONSTRAINT `fx_cod_client` FOREIGN KEY (`CodCliente`) REFERENCES `clientes` (`CodCliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fx_cod_clin` FOREIGN KEY (`CodClinica`) REFERENCES `clinicas` (`CodClinica`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

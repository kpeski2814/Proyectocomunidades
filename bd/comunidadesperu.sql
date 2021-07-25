-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2021 a las 22:07:45
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comunidadesperu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacitacion`
--

CREATE TABLE `capacitacion` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(10000) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `capacitacion`
--

INSERT INTO `capacitacion` (`id`, `id_user`, `actividad`, `fecha`) VALUES
(1, 76, 'fdgf', '2021-03-14'),
(2, 76, 'fdgf', '2021-03-14'),
(3, 76, 'fdgf', '2021-03-14'),
(4, 76, 'fdgf', '2021-03-14'),
(5, 76, 'fdgf', '2021-03-14'),
(6, 76, 'fdgf', '2021-03-14'),
(7, 76, 'fdgf', '2021-03-14'),
(8, 76, 'fdgf', '2021-03-14'),
(9, 76, 'fdgf', '2021-03-14'),
(10, 76, 'fdgf', '2021-03-14'),
(11, 76, 'fdgf', '2021-03-14'),
(12, 76, 'fdgf', '2021-03-14'),
(13, 76, 'fdgf', '2021-03-14'),
(14, 76, 'fdgf', '2021-03-14'),
(15, 76, 'fdgf', '2021-03-14'),
(16, 76, 'fdgf', '2021-03-14'),
(17, 76, 'fdgf', '2021-03-14'),
(18, 76, 'fdgf', '2021-03-14'),
(19, 76, 'fdgf', '2021-03-14'),
(20, 76, 'fdgf', '2021-03-14'),
(21, 76, 'fdgf', '2021-03-14'),
(22, 76, 'fdgf', '2021-03-14'),
(23, 75, 'y', '2021-03-14'),
(24, 84, 'asdsadsadas', '2021-03-26'),
(25, 84, 'adasdas', '2021-03-26'),
(26, 90, 'czxczxczxc', '2021-04-08'),
(27, 92, 'ljhijjo', '2021-04-08'),
(28, 92, 'kghi', '2021-04-08'),
(29, 91, 'dgdgf', '2021-04-09'),
(30, 93, 'sdfdsfsdfsd', '2021-04-09'),
(31, 96, 'sdfsdfs', '2021-04-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compromiso_actividades`
--

CREATE TABLE `compromiso_actividades` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compromiso_actividades`
--

INSERT INTO `compromiso_actividades` (`id`, `id_user`, `actividad`, `fecha`) VALUES
(1, 75, 'werew', '2021-03-14'),
(2, 76, 'fghgf', '2021-03-14'),
(3, 76, 'fghgf', '2021-03-14'),
(4, 81, 'ICGI', '2021-03-17'),
(5, 81, 'VRIN', '2021-03-17'),
(6, 84, 'ffsdfsdfsdfsdf', '2021-03-26'),
(7, 85, 'adsadasd', '2021-03-29'),
(8, 85, 'dgdfgfdgdf', '2021-03-29'),
(9, 86, '1', '2021-04-06'),
(10, 86, 'fhfghfg', '2021-05-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compromiso_actividades2`
--

CREATE TABLE `compromiso_actividades2` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL,
  `fecha` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compromiso_actividades2`
--

INSERT INTO `compromiso_actividades2` (`id`, `id_user`, `actividad`, `fecha`) VALUES
(1, 76, 'fghgf', '2021-03-14'),
(2, 76, 'fghgf', '2021-03-14'),
(3, 76, 'fghgf', '2021-03-14'),
(4, 76, 'fghgf', '2021-03-14'),
(5, 76, 'fghgf', '2021-03-14'),
(6, 76, 'fghgf', '2021-03-14'),
(7, 76, 'fghgf', '2021-03-14'),
(8, 76, 'fghgf', '2021-03-14'),
(9, 76, 'fghgf', '2021-03-14'),
(10, 76, 'fghgf', '2021-03-14'),
(11, 76, 'fghgf', '2021-03-14'),
(12, 76, 'fghgf', '2021-03-14'),
(13, 76, 'fghgf', '2021-03-14'),
(14, 76, 'fghgf', '2021-03-14'),
(15, 76, 'fghgf', '2021-03-14'),
(16, 76, 'fghgf', '2021-03-14'),
(17, 76, 'fghgf', '2021-03-14'),
(18, 76, 'fghgf', '2021-03-14'),
(19, 76, 'fghgf', '2021-03-14'),
(20, 76, 'fghgf', '2021-03-14'),
(21, 76, 'fghgf', '2021-03-14'),
(22, 76, 'fghgf', '2021-03-14'),
(23, 75, 'gfhgf', '2021-03-14'),
(24, 84, 'fdsfsdfds', '2021-03-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compromiso_actividades3`
--

CREATE TABLE `compromiso_actividades3` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compromiso_actividades3`
--

INSERT INTO `compromiso_actividades3` (`id`, `id_user`, `actividad`, `fecha`) VALUES
(1, 76, 'fg', '2021-03-14'),
(2, 76, 'fg', '2021-03-14'),
(3, 75, 'uyt', '2021-03-14'),
(4, 75, 'uyt', '2021-03-14'),
(5, 75, 'uyt', '2021-03-14'),
(6, 75, 'uyt', '2021-03-14'),
(7, 75, 'uyt', '2021-03-14'),
(8, 75, 'uyt', '2021-03-14'),
(9, 75, 'uyt', '2021-03-14'),
(10, 75, 'uyt', '2021-03-14'),
(11, 75, 'uyt', '2021-03-14'),
(12, 75, 'uyt', '2021-03-14'),
(13, 75, 'uyt', '2021-03-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compromiso_actividades4`
--

CREATE TABLE `compromiso_actividades4` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(100) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compromiso_actividades4`
--

INSERT INTO `compromiso_actividades4` (`id`, `id_user`, `actividad`, `fecha`) VALUES
(1, 76, 'fgh', '2021-03-14'),
(2, 76, 'fgh', '2021-03-14'),
(3, 76, 'fgh', '2021-03-14'),
(4, 76, 'fgh', '2021-03-14'),
(5, 76, 'fgh', '2021-03-14'),
(6, 76, 'fgh', '2021-03-14'),
(7, 76, 'fgh', '2021-03-14'),
(8, 76, 'fgh', '2021-03-14'),
(9, 76, 'fgh', '2021-03-14'),
(10, 76, 'fgh', '2021-03-14'),
(11, 76, 'fgh', '2021-03-14'),
(12, 76, 'fgh', '2021-03-14'),
(13, 76, 'fgh', '2021-03-14'),
(14, 76, 'fgh', '2021-03-14'),
(15, 76, 'fgh', '2021-03-14'),
(16, 76, 'fgh', '2021-03-14'),
(17, 76, 'fgh', '2021-03-14'),
(18, 76, 'fgh', '2021-03-14'),
(19, 76, 'fgh', '2021-03-14'),
(20, 76, 'fgh', '2021-03-14'),
(21, 76, 'fgh', '2021-03-14'),
(22, 76, 'fgh', '2021-03-14'),
(23, 75, 'hgj', '2021-03-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compromiso_actividades5`
--

CREATE TABLE `compromiso_actividades5` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(1001) NOT NULL,
  `fecha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compromiso_actividades5`
--

INSERT INTO `compromiso_actividades5` (`id`, `id_user`, `actividad`, `fecha`) VALUES
(1, 76, 'ghgf', '2021-03-14'),
(2, 76, 'ghgf', '2021-03-14'),
(3, 75, 'hgj', '2021-03-14'),
(4, 84, 'dasdsadasdsa', '2021-03-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compromiso_actividades6`
--

CREATE TABLE `compromiso_actividades6` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(100) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compromiso_actividades6`
--

INSERT INTO `compromiso_actividades6` (`id`, `id_user`, `actividad`, `fecha`) VALUES
(1, 76, 'gf', '2021-03-14'),
(2, 76, 'gf', '2021-03-14'),
(3, 75, 'hgjhg', '2021-03-14'),
(4, 78, 'sdsad', '2021-03-17'),
(5, 84, 'sdfdsfsdf', '2021-03-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidad`
--

CREATE TABLE `comunidad` (
  `id` int(5) NOT NULL,
  `id_user` int(5) DEFAULT NULL,
  `id_facultad` int(11) NOT NULL,
  `cod_reg` int(10) DEFAULT NULL,
  `denominacion` varchar(250) DEFAULT NULL,
  `tipo_comunidad_id` int(5) DEFAULT NULL,
  `facultad_id` int(5) DEFAULT NULL,
  `dani` longtext DEFAULT NULL,
  `financiamiento` longtext DEFAULT NULL,
  `nivel` varchar(5) DEFAULT NULL,
  `num_registro` varchar(70) DEFAULT NULL,
  `evaluacion_inicial` int(5) DEFAULT NULL,
  `facebook` longtext DEFAULT NULL,
  `pag_web` longtext DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `linea_inv` int(5) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `fin_no_institucional` int(11) DEFAULT NULL,
  `reg_dani` varchar(45) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comunidad`
--

INSERT INTO `comunidad` (`id`, `id_user`, `id_facultad`, `cod_reg`, `denominacion`, `tipo_comunidad_id`, `facultad_id`, `dani`, `financiamiento`, `nivel`, `num_registro`, `evaluacion_inicial`, `facebook`, `pag_web`, `date_created`, `linea_inv`, `created_at`, `fin_no_institucional`, `reg_dani`, `estatus`) VALUES
(1, 5, 1, 0, '1', 1, NULL, '1', NULL, NULL, '', NULL, '1', '1', '2021-07-24', 1, '2021-07-24 02:41:25', 1, NULL, 1),
(2, 12, 3, 0, 'rewrewr', 3, NULL, 'ewrwerewrw', NULL, NULL, '', NULL, 'rewrwerewr', 'ewrewre', '2021-07-06', 2, '2021-07-25 10:02:18', 2, NULL, 1),
(3, 13, 1, 0, 'deterter', 1, NULL, 'erter', NULL, NULL, '', NULL, 'trete', 'ertert', '2021-07-07', 3, '2021-07-25 11:24:35', 2, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidad_attached`
--

CREATE TABLE `comunidad_attached` (
  `id` int(5) NOT NULL,
  `comunidad_id` int(5) NOT NULL,
  `acta_constitucion` varchar(250) DEFAULT NULL,
  `res_decanal` varchar(250) DEFAULT NULL,
  `res_vrin` varchar(250) DEFAULT NULL,
  `solicitud` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comunidad_attached`
--

INSERT INTO `comunidad_attached` (`id`, `comunidad_id`, `acta_constitucion`, `res_decanal`, `res_vrin`, `solicitud`) VALUES
(1, 1, 'img/attached/1618241919_1 Aspectos del lexico en la juventud chalaca.pdf', 'img/attached/1618241919_1 Aspectos del lexico en la juventud chalaca.pdf', 'img/attached/1618241919_', 'img/attached/1618241919_1 Aspectos del lexico en la juventud chalaca.pdf'),
(2, 2, 'img/attached/1620063170_revisado.pdf', 'img/attached/1620063170_revisado.pdf', 'img/attached/1620063170_', 'img/attached/1620063170_revisado.pdf'),
(3, 3, 'img/attached/1621347652_Oficio NÂ° 0057-OFI-ICGI .pdf', 'img/attached/1621347652_Oficio NÂ° 0057-OFI-ICGI .pdf', 'img/attached/1621347652_Oficio NÂ° 0057-OFI-ICGI .pdf', 'img/attached/1621347652_Oficio NÂ° 0057-OFI-ICGI .pdf'),
(4, 0, 'img/attached/1621536008_ACCEDER_TALLER_DE_FACTURACION_ELECTRONICA.pdf.pdf', 'img/attached/1621536008_ACCEDER_TALLER_DE_FACTURACION_ELECTRONICA.pdf.pdf', 'img/attached/1621536008_ACCEDER_TALLER_DE_FACTURACION_ELECTRONICA.pdf.pdf', 'img/attached/1621536008_ACCEDER_TALLER_DE_FACTURACION_ELECTRONICA.pdf.pdf'),
(5, 0, 'img/attached/1621536557_sample.pdf', 'img/attached/1621536557_sample.pdf', 'img/attached/1621536557_sample.pdf', 'img/attached/1621536557_sample.pdf'),
(6, 5, 'img/attached/1621537019_ACCEDER_TALLER_DE_FACTURACION_ELECTRONICA.pdf.pdf', 'img/attached/1621537019_ACCEDER_TALLER_DE_FACTURACION_ELECTRONICA.pdf.pdf', 'img/attached/1621537019_ACCEDER_TALLER_DE_FACTURACION_ELECTRONICA.pdf.pdf', 'img/attached/1621537019_ACCEDER_TALLER_DE_FACTURACION_ELECTRONICA.pdf.pdf'),
(7, 6, 'img/attached/1621543428_ACCEDER_TALLER_DE_FACTURACION_ELECTRONICA.pdf.pdf', 'img/attached/1621543428_ACCEDER_TALLER_DE_FACTURACION_ELECTRONICA.pdf.pdf', 'img/attached/1621543428_ACCEDER_TALLER_DE_FACTURACION_ELECTRONICA.pdf.pdf', 'img/attached/1621543428_ACCEDER_TALLER_DE_FACTURACION_ELECTRONICA.pdf.pdf'),
(8, 7, 'img/attached/1621555492_ACCEDER_TALLER_DE_FACTURACION_ELECTRONICA.pdf.pdf', 'img/attached/1621555492_ACCEDER_TALLER_DE_FACTURACION_ELECTRONICA.pdf.pdf', 'img/attached/1621555492_ACCEDER_TALLER_DE_FACTURACION_ELECTRONICA.pdf.pdf', 'img/attached/1621555492_ACCEDER_TALLER_DE_FACTURACION_ELECTRONICA.pdf.pdf'),
(9, 8, 'img/attached/1621617527_ACCEDER_TALLER_DE_FACTURACION_ELECTRONICA.pdf.pdf', 'img/attached/1621617527_ACCEDER_TALLER_DE_FACTURACION_ELECTRONICA.pdf.pdf', 'img/attached/1621617527_ACCEDER_TALLER_DE_FACTURACION_ELECTRONICA.pdf.pdf', 'img/attached/1621617527_ACCEDER_TALLER_DE_FACTURACION_ELECTRONICA.pdf.pdf'),
(10, 9, 'img/attached/1621656969_1 Aspectos del lexico en la juventud chalaca.pdf', 'img/attached/1621656969_1 Aspectos del lexico en la juventud chalaca.pdf', 'img/attached/1621656969_1 Aspectos del lexico en la juventud chalaca.pdf', 'img/attached/1621656969_1 Aspectos del lexico en la juventud chalaca.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidad_modal`
--

CREATE TABLE `comunidad_modal` (
  `id` int(5) NOT NULL,
  `cod_reg` int(5) NOT NULL,
  `tipo` varchar(70) NOT NULL,
  `nombres` varchar(250) NOT NULL,
  `image_path` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comunidad_modal`
--

INSERT INTO `comunidad_modal` (`id`, `cod_reg`, `tipo`, `nombres`, `image_path`, `created_at`) VALUES
(1, 1618241613, 'inv_principal', 'Luis perez', 'img/attached/1618241741_1_aspectos_del_lexico_en_la_juventud_chalaca.pdf', '2021-04-12 10:35:41'),
(2, 1618241613, 'est_vite', 'Ronald', 'img/attached/1618241768_1_aspectos_del_lexico_en_la_juventud_chalaca.pdf', '2021-04-12 10:36:08'),
(3, 1618241613, 'coor_vite', 'gdfgdf', 'img/attached/1618241796_1_aspectos_del_lexico_en_la_juventud_chalaca.pdf', '2021-04-12 10:36:36'),
(4, 1618241613, 'inv_asociado', 'gdfgfd', 'img/attached/1618241817_1_aspectos_del_lexico_en_la_juventud_chalaca.pdf', '2021-04-12 10:36:57'),
(5, 1618241613, 'egre_vite', 'hhfghgf', 'img/attached/1618241840_1_aspectos_del_lexico_en_la_juventud_chalaca.pdf', '2021-04-12 10:37:20'),
(6, 1620062153, 'inv_principal', 'luis pereza zarate', 'img/attached/1620062201_revisado.pdf', '2021-05-03 12:16:41'),
(7, 1620062153, 'est_vite', 'perez', 'img/attached/1620062220_revisado.pdf', '2021-05-03 12:17:00'),
(8, 1620062153, 'est_vite', 'melania', 'img/attached/1620062244_revisado.pdf', '2021-05-03 12:17:24'),
(9, 1620062153, 'miembros_nac', 'jhjfg', 'img/attached/1620062364_revisado.pdf', '2021-05-03 12:19:24'),
(10, 1620062153, 'coor_vite', 'fghgfh', 'img/attached/1620062372_revisado.pdf', '2021-05-03 12:19:32'),
(11, 1620062153, 'inv_principal', 'luis pereza zarate', 'img/attached/1620062373_revisado.pdf', '2021-05-03 12:19:33'),
(12, 1620062153, 'inv_asociado', 'cbcvhgf', 'img/attached/1620062404_revisado.pdf', '2021-05-03 12:20:04'),
(13, 1620062153, 'reconocimientos', 'rete', 'img/attached/1620062714_revisado.pdf', '2021-05-03 12:25:14'),
(14, 1620062153, 'egre_vite', '65654', 'img/attached/1620062730_revisado.pdf', '2021-05-03 12:25:30'),
(15, 1620224081, 'coor_vite', 'MARIVEL TERESA AGUIRRE MORALES', 'img/attached/1620224776_cv-_unfv_-_post_grado_marivel2020.docx', '2021-05-05 09:26:32'),
(16, 1620224081, 'coor_vite', 'MARIVEL TERESA AGUIRRE MORALES', 'img/attached/1620224809_cv-_unfv_-_post_grado_marivel2020.docx', '2021-05-05 09:27:05'),
(17, 1620224081, 'coor_vite', 'MARIVEL TERESA AGUIRRE MORALES', 'img/attached/1620224805_cv-_unfv_-_post_grado_marivel2020.docx', '2021-05-05 09:27:06'),
(18, 1620224081, 'coor_vite', 'MARIVEL TERESA AGUIRRE MORALES', 'img/attached/1620224809_cv-_unfv_-_post_grado_marivel2020.docx', '2021-05-05 09:27:06'),
(19, 1620224081, 'coor_vite', 'MARIVEL TERESA AGUIRRE MORALES', 'img/attached/1620224814_cv-_unfv_-_post_grado_marivel2020.docx', '2021-05-05 09:27:07'),
(20, 1620224081, 'coor_vite', 'MARIVEL TERESA AGUIRRE MORALES', 'img/attached/1620224816_cv-_unfv_-_post_grado_marivel2020.docx', '2021-05-05 09:27:08'),
(21, 1620224081, 'coor_vite', 'MARIVEL TERESA AGUIRRE MORALES', 'img/attached/1620224829_cv-_unfv_-_post_grado_marivel2020.docx', '2021-05-05 09:27:17'),
(22, 1620225788, 'miembros_nac', 'INGRID CIRILO', 'img/attached/1620226034__8087-21-_r_faps-2021_florita_pinto_herreras_unidad_de_calidad__2_-convertido[r][r]-new[r][r].pdf', '2021-05-05 09:47:14'),
(23, 1620225788, 'miembros_int', 'ELIZABETH', 'img/attached/1620226212_', '2021-05-05 09:50:12'),
(24, 1621346868, 'coor_vite', 'CARMEN ROCIO', 'img/attached/1621347020_1.declaracion_jurada_doc_renacyt_-_claudio_alvarez_verde.pdf', '2021-05-18 09:10:20'),
(25, 1621346868, 'inv_principal', 'CARMEN ROCIO2', 'img/attached/1621347040_1.declaracion_jurada_doc_renacyt_-_claudio_alvarez_verde.pdf', '2021-05-18 09:10:40'),
(26, 1621346868, 'inv_asociado', 'LUIS PEREZ', 'img/attached/1621347056_3.declaracion_jurada_doc_renacyt_-_jose_anicama_gomez.pdf', '2021-05-18 09:10:56'),
(27, 1621346868, 'est_vite', 'RONALD G', 'img/attached/1621347070_4.declaracion_jurada_doc_renacyt_-_jose_arevalo_tuesta.pdf', '2021-05-18 09:11:10'),
(28, 1621346868, 'egre_vite', 'LIZARDO T', 'img/attached/1621347085_6.declaracion_jurada_doc_renacyt_-_walter_capa_luque.pdf', '2021-05-18 09:11:25'),
(29, 1621346868, 'miembros_nac', 'CECILIA A', 'img/attached/1621347155_7.declaracion_jurada_doc_renacyt_-_luz_castaÃ±eda_perez.pdf', '2021-05-18 09:12:35'),
(30, 1621346868, 'miembros_int', 'CECILIA Ar', 'img/attached/1621347458_7.declaracion_jurada_doc_renacyt_-_luz_castaÃ±eda_perez.pdf', '2021-05-18 09:17:38'),
(31, 1621346868, 'reconocimientos', 'diploma', 'img/attached/1621347629_oficio_58-ofi_reunion_uiie-fopca_formacion_de_grupo_investig..pdf', '2021-05-18 09:20:29'),
(32, 1621534486, 'miembros_nac', 'DFGFDG', 'img/attached/1621535654_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 13:34:16'),
(33, 1621534486, 'miembros_nac', 'DFGFDG', 'img/attached/1621535656_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 13:34:17'),
(34, 1621534486, 'est_vite', 'DFGF', 'img/attached/1621535662_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 13:34:22'),
(35, 1621535708, 'reconocimientos', 'rwerwer', 'img/attached/1621535845_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 13:37:26'),
(36, 1621535708, 'miembros_nac', 'rwerwer', 'img/attached/1621535858_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 13:37:39'),
(37, 1621535708, 'est_vite', 'werwer', 'img/attached/1621535864_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 13:37:45'),
(38, 1621535882, 'prod_cientifica_verif', 'ewrwer', 'img/attached/1621535889_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 13:38:09'),
(39, 1621535882, 'est_vite', 'werwer', 'img/attached/1621535895_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 13:38:15'),
(40, 1621535882, 'reconocimientos', 'rwewe', 'img/attached/1621535946_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 13:39:06'),
(41, 1621535882, 'miembros_int', 'rwerew', 'img/attached/1621535952_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 13:39:12'),
(42, 1621535882, 'egre_vite', 'rweewrwe', 'img/attached/1621535958_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 13:39:18'),
(43, 1621535882, 'miembros_nac', 'werewr', 'img/attached/1621535977_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 13:39:37'),
(44, 1621536183, 'prod_cientifica_verif', 'lolu', 'img/attached/1621536189_sample.pdf', '2021-05-20 13:43:09'),
(45, 1621536402, 'prod_cientifica_verif', 'lolu', 'img/attached/1621536436_sample.pdf', '2021-05-20 13:47:16'),
(46, 1621536402, 'est_vite', 'lolu', 'img/attached/1621536491_sample.pdf', '2021-05-20 13:48:11'),
(47, 1621536402, 'egre_vite', 'lolu', 'img/attached/1621536500_sample.pdf', '2021-05-20 13:48:20'),
(48, 1621536402, 'miembros_nac', 'lolu', 'img/attached/1621536506_sample.pdf', '2021-05-20 13:48:26'),
(49, 1621536402, 'miembros_int', 'lolu', 'img/attached/1621536523_sample.pdf', '2021-05-20 13:48:43'),
(50, 1621536402, 'reconocimientos', 'lolu', 'img/attached/1621536547_sample.pdf', '2021-05-20 13:49:07'),
(51, 1621536889, 'reconocimientos', 'gdfgd', 'img/attached/1621536915_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 13:55:15'),
(52, 1621536889, 'miembros_nac', 'dgdf', 'img/attached/1621536926_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 13:55:26'),
(53, 1621536889, 'est_vite', 'dfgdfgf', 'img/attached/1621536931_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 13:55:31'),
(54, 1621536889, 'prod_cientifica_verif', 'dfgdfgf', 'img/attached/1621536936_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 13:55:36'),
(55, 1621536889, 'miembros_int', 'sdfsdf', 'img/attached/1621536968_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 13:56:08'),
(56, 1621536889, 'egre_vite', 'sdfsdf', 'img/attached/1621536974_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 13:56:14'),
(57, 1621542633, 'prod_cientifica_verif', 'retertet', 'img/attached/1621543177_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 15:39:37'),
(58, 1621542633, 'reconocimientos', 'dsfsdf', 'img/attached/1621543232_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 15:40:32'),
(59, 1621542633, 'egre_vite', 'fdgdfgdf', 'img/attached/1621543313_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 15:41:53'),
(60, 1621542633, 'est_vite', 'dfgdfg', 'img/attached/1621543319_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 15:41:59'),
(61, 1621542633, 'miembros_nac', 'dfgdfg', 'img/attached/1621543332_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 15:42:12'),
(62, 1621542633, 'miembros_int', 'dgdfgdfg', 'img/attached/1621543341_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 15:42:22'),
(63, 1621555119, 'reconocimientos', 'fdgdfg', 'img/attached/1621555397_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 19:03:17'),
(64, 1621555119, 'egre_vite', 'dhgdgdf', 'img/attached/1621555419_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 19:03:39'),
(65, 1621555119, 'prod_cientifica_verif', 'iuuiuh', 'img/attached/1621555428_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 19:03:49'),
(66, 1621555119, 'miembros_int', 'gdgdf', 'img/attached/1621555435_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 19:03:55'),
(67, 1621555119, 'est_vite', 'dfgfdg', 'img/attached/1621555440_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 19:04:00'),
(68, 1621555119, 'miembros_nac', 'dfgdfg', 'img/attached/1621555446_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-20 19:04:06'),
(69, 1621617315, 'prod_cientifica_verif', 'asdsadas', 'img/attached/1621617415_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-21 12:16:56'),
(70, 1621617315, 'miembros_nac', 'czxczxczx', 'img/attached/1621617443_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-21 12:17:24'),
(71, 1621617315, 'egre_vite', 'cxzcxzc', 'img/attached/1621617450_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-21 12:17:31'),
(72, 1621617315, 'miembros_int', 'xzczxc', 'img/attached/1621617458_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-21 12:17:38'),
(73, 1621617315, 'reconocimientos', 'sdfdsadas', 'img/attached/1621617508_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-21 12:18:28'),
(74, 1621617315, 'est_vite', 'sadsad', 'img/attached/1621617518_acceder_taller_de_facturacion_electronica.pdf.pdf', '2021-05-21 12:18:39'),
(75, 1621655921, 'reconocimientos', 'tewewt', 'img/attached/1621656084_1_aspectos_del_lexico_en_la_juventud_chalaca.pdf', '2021-05-21 23:01:24'),
(76, 1621655921, 'egre_vite', 'tewwtwe', 'img/attached/1621656097_2_diagnostico_sobre_el_consumo_de_bolsas_de_plastico.pdf', '2021-05-21 23:01:37'),
(77, 1621655921, 'prod_cientifica_verif', 'fsfsd', 'img/attached/1621656470_1_aspectos_del_lexico_en_la_juventud_chalaca.pdf', '2021-05-21 23:07:50'),
(78, 1621655921, 'est_vite', 'ffsdfs', 'img/attached/1621656483_1_aspectos_del_lexico_en_la_juventud_chalaca.pdf', '2021-05-21 23:08:03'),
(79, 1621655921, 'est_vite', 'ffsdfs', 'img/attached/1621656483_1_aspectos_del_lexico_en_la_juventud_chalaca.pdf', '2021-05-21 23:08:03'),
(80, 1621655921, 'est_vite', 'ffsdfs', 'img/attached/1621656484_1_aspectos_del_lexico_en_la_juventud_chalaca.pdf', '2021-05-21 23:08:04'),
(81, 1621655921, 'miembros_int', 'gdfdsg', 'img/attached/1621656497_1_aspectos_del_lexico_en_la_juventud_chalaca.pdf', '2021-05-21 23:08:17'),
(82, 1621655921, 'miembros_int', 'gdfdsg', 'img/attached/1621656498_1_aspectos_del_lexico_en_la_juventud_chalaca.pdf', '2021-05-21 23:08:18'),
(83, 1621655921, 'miembros_nac', 'gdfg', 'img/attached/1621656505_7_creaciÃ³n_de_valor_social_por_las_empresas_de_industrias.pdf', '2021-05-21 23:08:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_docente`
--

CREATE TABLE `datos_docente` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `dni` varchar(100) NOT NULL,
  `documento` varchar(11) NOT NULL,
  `apellidom` varchar(100) NOT NULL,
  `apellidop` varchar(100) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `escuela` varchar(100) NOT NULL,
  `facultad` varchar(10000) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `grupo` varchar(100) NOT NULL,
  `nivel` varchar(100) NOT NULL,
  `comunidad` varchar(1000) NOT NULL,
  `fecha_ingreso` varchar(10) NOT NULL,
  `condicion` varchar(100) NOT NULL,
  `dedicacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_docente`
--

INSERT INTO `datos_docente` (`id`, `id_user`, `dni`, `documento`, `apellidom`, `apellidop`, `fecha`, `nombre`, `genero`, `telefono`, `correo`, `foto`, `escuela`, `facultad`, `codigo`, `grupo`, `nivel`, `comunidad`, `fecha_ingreso`, `condicion`, `dedicacion`) VALUES
(8, 86, 'dfgdfgdfgdf', '4534534', 'gfdgfdg', 'gfdgdfgfdgdf', '2021-04-29', 'gfdgfd', 'hombre', '4564353454353', 'fsdf@hotmail.com', 'hols.jpg', 'fdgfdgd', 'facultad de ciencias naturales y matematica', 'fdgdfgdfg', 'MARIA ROSTWOROWSKI', 'II', 'fdgdfgdfgdfgdfg', '2021-05-01', 'Docente permanente', 'Tiempo Parcial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doc_produccion`
--

CREATE TABLE `doc_produccion` (
  `id` int(5) NOT NULL,
  `cod_reg` int(5) NOT NULL,
  `tipo` varchar(70) NOT NULL,
  `nombres` varchar(70) NOT NULL,
  `enlace` varchar(120) NOT NULL,
  `image_path` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `doc_produccion`
--

INSERT INTO `doc_produccion` (`id`, `cod_reg`, `tipo`, `nombres`, `enlace`, `image_path`) VALUES
(1, 1621531544, 'tipo_doc_prod', 'lolu', 'http://localhost/comunidades/datos.php', 'img/attached/1621531550_sample.pdf'),
(2, 1621535882, 'tipo_doc_prod', 'rwerwer', 'werewrew', 'img/attached/1621535964_acceder_taller_de_facturacion_electronica.pdf.pdf'),
(3, 1621536402, 'tipo_doc_prod', 'lolu', 'http://localhost/comunidades/datos.php', 'img/attached/1621536482_sample.pdf'),
(4, 1621536889, 'tipo_doc_prod', 'sdfsd', 'sdfsdf', 'img/attached/1621536979_acceder_taller_de_facturacion_electronica.pdf.pdf'),
(5, 1621542633, 'tipo_doc_prod', 'ertertert', 'https://sihuas.yachay.pe:2083/cpsess6811559257/frontend/paper_lantern/index.html?login=1&post_login=31010906350273', 'img/attached/1621543206_acceder_taller_de_facturacion_electronica.pdf.pdf'),
(6, 1621555119, 'tipo_doc_prod', 'gdfg', 'fdgfd', 'img/attached/1621555404_acceder_taller_de_facturacion_electronica.pdf.pdf'),
(7, 1621617315, 'tipo_doc_prod', 'asdsadsa', 'dasdasd', 'img/attached/1621617424_acceder_taller_de_facturacion_electronica.pdf.pdf'),
(8, 1621655921, 'tipo_doc_prod', 'tewwet', 'wetew', 'img/attached/1621656091_1_aspectos_del_lexico_en_la_juventud_chalaca.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `id` int(5) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `facultad`
--

INSERT INTO `facultad` (`id`, `descripcion`) VALUES
(1, 'Facultad de administracion'),
(2, 'Facultad de arquitectura y urbanismo'),
(3, 'Facultad de ciencias economicas'),
(4, 'Facultad de ciencias financieras y contables'),
(5, 'Facultad de ciencias naturales y matematica'),
(6, 'Facultad de ciencias sociales'),
(7, 'Facultad de derecho y ciencia politica'),
(8, 'Facultad de educacion'),
(9, 'Facultad de humanidades'),
(10, 'Facultad de ingenieria civil'),
(11, 'Facultad de ingenieria electronica e informatica'),
(12, 'Facultad de ingenieria geografica y ambiental'),
(13, 'Facultad de ingenieria industrial y sistemas'),
(14, 'Facultad de medicina'),
(15, 'Facultad de odontologia'),
(16, 'Facultad de oceanografia, pesquera y ciencias alimentarias'),
(17, 'Facultad de psicologia'),
(18, 'Facultad de tecnologia medica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion`
--

CREATE TABLE `gestion` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `d1` varchar(10000) NOT NULL,
  `d2` varchar(10000) NOT NULL,
  `d3` varchar(10000) NOT NULL,
  `d4` varchar(10000) NOT NULL,
  `d5` varchar(10000) NOT NULL,
  `d6` varchar(10000) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion1`
--

CREATE TABLE `gestion1` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gestion1`
--

INSERT INTO `gestion1` (`id`, `id_user`, `actividad`, `fecha`) VALUES
(2, 76, 'fgh', '2021-03-14'),
(3, 76, 'fgh', '2021-03-14'),
(4, 75, 'yuhgh', '2021-03-14'),
(5, 84, 'dfdsgd', '2021-03-26'),
(6, 84, 'dfgfdg', '2021-03-26'),
(7, 84, 'gdfgfdgdf', '2021-03-26'),
(8, 84, 'fdgfdgdfgd', '2021-03-26'),
(9, 85, 'saddsadsa', '2021-03-29'),
(10, 85, 'asdasda', '2021-03-29'),
(11, 86, 'hfghgfhgf', '2021-05-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion2`
--

CREATE TABLE `gestion2` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gestion2`
--

INSERT INTO `gestion2` (`id`, `id_user`, `actividad`, `fecha`) VALUES
(1, 76, 'hghfg', '2021-03-14'),
(2, 76, 'hghfg', '2021-03-14'),
(3, 75, 'yuy', '2021-03-14'),
(4, 75, 'jh', '2021-03-14'),
(5, 75, 'jh', '2021-03-14'),
(6, 75, 'jh', '2021-03-14'),
(7, 75, 'jh', '2021-03-14'),
(8, 75, 'jh', '2021-03-14'),
(9, 75, 'jh', '2021-03-14'),
(10, 75, 'jh', '2021-03-14'),
(11, 75, 'jh', '2021-03-14'),
(12, 75, 'jh', '2021-03-14'),
(13, 75, 'jh', '2021-03-14'),
(14, 84, 'dgdfgdfgfdg', '2021-03-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion3`
--

CREATE TABLE `gestion3` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(100) NOT NULL,
  `fecha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gestion3`
--

INSERT INTO `gestion3` (`id`, `id_user`, `actividad`, `fecha`) VALUES
(1, 76, 'fghgfh', '2021-03-14'),
(2, 76, 'fghgfh', '2021-03-14'),
(3, 76, 'hgj', '2021-03-14'),
(4, 76, 'hgj', '2021-03-14'),
(5, 76, 'hgj', '2021-03-14'),
(6, 76, 'hgj', '2021-03-14'),
(7, 76, 'hgj', '2021-03-14'),
(8, 76, 'hgj', '2021-03-14'),
(9, 76, 'hgj', '2021-03-14'),
(10, 76, 'hgj', '2021-03-14'),
(11, 76, 'hgj', '2021-03-14'),
(12, 76, 'hgj', '2021-03-14'),
(13, 76, 'hgj', '2021-03-14'),
(14, 76, 'hgj', '2021-03-14'),
(15, 76, 'hgjhjk', '2021-03-14'),
(16, 76, 'hgjhjk', '2021-03-14'),
(17, 76, 'hgjhjk', '2021-03-14'),
(18, 76, 'hgjhjk', '2021-03-14'),
(19, 76, 'hgjhjk', '2021-03-14'),
(20, 76, 'hgjhjk', '2021-03-14'),
(21, 76, 'hgjhjk', '2021-03-14'),
(22, 76, 'hgjhjk', '2021-03-14'),
(23, 75, 'yuy', '2021-03-14'),
(24, 84, 'dgfdgdfg', '2021-03-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion4`
--

CREATE TABLE `gestion4` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gestion4`
--

INSERT INTO `gestion4` (`id`, `id_user`, `actividad`, `fecha`) VALUES
(1, 76, 'g', '2021-03-14'),
(2, 76, 'g', '2021-03-14'),
(3, 75, 'yu', '2021-03-14'),
(4, 78, 'asdas', '2021-03-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion5`
--

CREATE TABLE `gestion5` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gestion5`
--

INSERT INTO `gestion5` (`id`, `id_user`, `actividad`, `fecha`) VALUES
(1, 76, 'fg', '2021-03-14'),
(2, 76, 'fg', '2021-03-14'),
(3, 75, 'yu', '2021-03-14'),
(4, 78, 'asasdd', '2021-03-17'),
(5, 84, 'dfgdfgdf', '2021-03-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigacion_actividades1`
--

CREATE TABLE `investigacion_actividades1` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `investigacion_actividades1`
--

INSERT INTO `investigacion_actividades1` (`id`, `id_user`, `actividad`, `fecha`) VALUES
(1, 76, 'fdg', '2021-03-14'),
(2, 76, 'fdg', '2021-03-14'),
(3, 75, 'y', '2021-03-14'),
(4, 84, 'sdfdfs', '2021-03-26'),
(5, 84, 'sdfsd', '2021-03-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigacion_actividades2`
--

CREATE TABLE `investigacion_actividades2` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `investigacion_actividades2`
--

INSERT INTO `investigacion_actividades2` (`id`, `id_user`, `actividad`, `fecha`) VALUES
(1, 76, 'fdg', '2021-03-14'),
(2, 76, 'fdg', '2021-03-14'),
(3, 75, 'y', '2021-03-14'),
(4, 84, 'sdfdsfsd', '2021-03-26'),
(5, 84, 'sfsdfds', '2021-03-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigacion_formativa`
--

CREATE TABLE `investigacion_formativa` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `d1` varchar(11) NOT NULL,
  `d2` varchar(11) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigador`
--

CREATE TABLE `investigador` (
  `id` int(5) NOT NULL,
  `cod_reg` int(5) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombres` varchar(70) NOT NULL,
  `facultad` varchar(50) NOT NULL,
  `image_path` varchar(250) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `enlace` varchar(120) NOT NULL,
  `calificacion` varchar(5) NOT NULL,
  `grupo` varchar(70) NOT NULL,
  `nivel` varchar(10) NOT NULL,
  `clase` varchar(70) NOT NULL,
  `codigo` varchar(15) NOT NULL,
  `scopus` varchar(20) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `grado_academico` varchar(70) NOT NULL,
  `area` varchar(50) NOT NULL,
  `notas` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `investigador`
--

INSERT INTO `investigador` (`id`, `cod_reg`, `tipo`, `nombres`, `facultad`, `image_path`, `cargo`, `telefono`, `correo`, `enlace`, `calificacion`, `grupo`, `nivel`, `clase`, `codigo`, `scopus`, `titulo`, `grado_academico`, `area`, `notas`) VALUES
(1, 1621533861, 'inv_principal', 'lolu', 'facultad', 'img/attached/1621533874_sample.pdf', 'fefe', '87654321', 'juan@colo.pe', 'http://localhost/comunidades/datos.php', 'SI', 'MARIA R.', 'I', '', 'BS', '121212', 'wwwwwwww', 'aaaaaa', 'asdasd', 'asdasdaq'),
(2, 1621533861, 'inv_principal', 'KAYLINx', 'facultad', 'img/attached/1621533921_sample.pdf', 'fefe', '87654321', 'juan@colo.pe', 'http://localhost/comunidades/datos.php', 'SI', 'MARIA R.', 'I', 'Docente Investigador', 'BS', '121212', 'wwwwwwww', 'aaaaaa', 'asdasd', 'asdasdasd'),
(3, 1621534140, 'inv_asociado', 'lolu', 'facultad', 'img/attached/1621534152_voucher-bcp.jpg', 'fefe', '87654321', 'juan@colo.pe', 'http://localhost/comunidades/datos.php', 'SI', 'MARIA R.', 'I', 'Docente Investigador', 'BS', '121212', 'wwwwwwww', 'aaaaaa', 'asdasd', '222'),
(4, 1621535882, 'inv_principal', 'werewrewr', 'facultad', 'img/attached/1621535914_acceder_taller_de_facturacion_electronica.pdf.pdf', 'werwe', 'ewrwer', 'rwer', 'werwer', 'SI', 'MARIA R.', 'I', 'Docente Investigador', 'wewer', 'werew', 'werwer', 'rwerwer', 'rwerwe', 'ewrwer'),
(5, 1621535882, 'inv_asociado', 'terter', 'facultad', 'img/attached/1621536003_acceder_taller_de_facturacion_electronica.pdf.pdf', 'tertre', 'erter', 'terterter', 'tertert', 'NO', 'CARLOS MONGUE', 'I', 'Docente Investigador', 'eerte', 'tertert', 'ertert', 'etert', 'erter', 'etret'),
(6, 1621536074, 'inv_principal', 'lolu', 'facultad', 'img/attached/1621536146_sample.pdf', 'fefe', '87654321', 'juan@colo.pe', 'http://localhost/comunidades/datos.php', 'SI', 'MARIA R.', 'I', 'Docente Investigador', 'BS', '121212', 'wwwwwwww', 'aaaaaa', 'asdasd', 'sadas'),
(7, 1621536074, 'inv_asociado', 'lolu', 'facultad', 'img/attached/1621536166_sample.pdf', 'fefe', '87654321', 'juan@colo.pe', 'http://localhost/comunidades/datos.php', 'SI', 'MARIA R.', 'I', 'Docente Investigador', 'BS', '121212', 'wwwwwwww', 'aaaaaa', 'asdasd', 'sadadsasd'),
(8, 1621536402, 'inv_principal', 'lolu', 'facultad', 'img/attached/1621536460_sample.pdf', 'fefe', '87654321', 'juan@colo.pe', 'http://localhost/comunidades/datos.php', 'NO', 'CARLOS MONGUE', 'II', 'Docente Investigador', 'BS', '121212', 'wwwwwwww', 'aaaaaa', 'asdasd', 'sadasdsda'),
(9, 1621536402, 'inv_principal', 'lolu', 'facultad', 'img/attached/1621536473_sample.pdf', 'fefe', '87654321', 'juan@colo.pe', 'http://localhost/comunidades/datos.php', 'NO', 'CARLOS MONGUE', 'II', 'Docente Investigador', 'BS', '121212', 'wwwwwwww', 'aaaaaa', 'asdasd', 'sadasdsda'),
(10, 1621536402, 'inv_asociado', 'lolu', 'facultad', 'img/attached/1621536473_sample.pdf', 'fefe', '87654321', 'juan@colo.pe', 'http://localhost/comunidades/datos.php', 'SI', 'MARIA R.', 'I', 'Docente Investigador', 'BS', '121212', 'wwwwwwww', 'aaaaaa', 'asdasd', 'sadasdsad'),
(11, 1621536889, 'inv_principal', 'gdfgdfg', 'facultad', 'img/attached/1621536960_acceder_taller_de_facturacion_electronica.pdf.pdf', 'gdfgdf', 'dfgdf', 'gdfgd@hotmail.com', 'fsdfsdf', 'NO', 'MARIA R.', 'III', 'Codigo Orcid', 'fsdfsd', 'dsfdsf', 'fsdfsd', 'sdfsdf', 'sdfsdfsd', 'sdfsdf'),
(12, 1621536889, 'inv_asociado', 'sdfsdf', 'facultad', 'img/attached/1621537011_acceder_taller_de_facturacion_electronica.pdf.pdf', 'sdfsdfsd', 'sdfsdf', 'sdfsd', 'fsdf', 'SI', 'MARIA R.', 'II', 'Codigo Orcid', 'fsdfsdf', 'fsdfsdf', 'sdfsdfsd', 'sdf', 'sdffsd', 'dsfsdfsd'),
(13, 1621542633, 'inv_principal', 'Ronald', 'facultad', 'img/attached/1621543059_acceder_taller_de_facturacion_electronica.pdf.pdf', 'asistente', '654535435', 'sddsfs@hotmail.com', 'https://outlook.office.com/mail/inbox/id/AAQkADMxZWIyNmMxLWI2Y2MtNDE1OC1hMTkzLTA5MWZhNzFlOThhMgAQAKkumkPlcZxKhvB0FtWli7k', 'SI', 'MARIA R.', 'I', 'Docente Investigador', 'https://sihuas.', '5345345', 'trterte', 'magistewr', 'fsdfdsfs', 'tgdfgd'),
(14, 1621542633, 'inv_asociado', 'dassadsad', 'facultad', 'img/attached/1621543422_acceder_taller_de_facturacion_electronica.pdf.pdf', 'dasdasdasd', 'dassad', 'sdfsd@hotmail.com', 'https://sihuas.yachay.pe:2083/cpsess6811559257/frontend/paper_lantern/index.html?login=1&post_login=31010906350273', 'NO', 'CARLOS MONGUE', 'I', 'Docente Investigador', 'gdfgd', 'ddsgff', 'dfgdfg', 'dfgfdg', 'dfgfdg', 'dfgdf'),
(15, 1621553588, 'inv_principal', 'Yennifer', 'facultad', 'img/attached/1621553901_', 'adm', '9726456', 'yenni@gmail.com', 'kolkloj', 'NO', 'CARLOS MONGUE', 'II', 'Docente Investigador', '12345', 'sfetffg', 'nacion', 'kdkd', 'Âº', '20'),
(16, 1621555119, 'inv_principal', 'ggdfgdf', 'facultad', 'img/attached/1621555357_acceder_taller_de_facturacion_electronica.pdf.pdf', 'yrtytr', 'yrty', 'tyrtytry', 'rr', 'SI', 'MARIA R.', 'I', 'Docente Investigador', 'yrtytr', 'yrtytt', 'yrtyr', 'rtyrtyrt', 'tryrtyr', 'tyrtyrt'),
(17, 1621555119, 'inv_asociado', 'gdfgd', 'facultad', 'img/attached/1621555474_acceder_taller_de_facturacion_electronica.pdf.pdf', 'fgdfgfdg', 'dfgfd', 'gdfgdfg', 'dfgdf', 'SI', 'MARIA R.', 'I', 'Codigo Orcid', 'dfgdfg', 'fgfdg', 'dfgd', 'fdgd', 'fgfdg', 'fg'),
(18, 1621617315, 'inv_principal', 'fdsfsdfsdfdsf', 'facultad', 'img/attached/1621617367_acceder_taller_de_facturacion_electronica.pdf.pdf', 'fsdfsd', '454353453', 'fgsd@hotmail.com', 'https://sihuas.yachay.pe:2083/cpsess6811559257/3rdparty/phpMyAdmin/tbl_structure.php?db=joselivi_comunidades&table=facul', 'SI', 'MARIA R.', 'II', 'Docente Investigador', '43534534', '345434', '345345', 'magister', 'fsdfsd', 'fsdfs'),
(19, 1621617315, 'inv_asociado', 'czxcxzc', 'facultad', 'img/attached/1621617498_acceder_taller_de_facturacion_electronica.pdf.pdf', 'zxczxc', 'f32423234223', 'czxczx@hotmail.com', 'fdsfds', 'SI', 'MARIA R.', 'I', 'Codigo Orcid', 'sdfsdf', 'fsdfdsf', 'sdfsdf', 'dsfsd', 'sdfsdf', 'sdfsdsd'),
(20, 1621655921, 'inv_principal', 'twetwetr', 'facultad', 'img/attached/1621656047_1_aspectos_del_lexico_en_la_juventud_chalaca.pdf', 'etwet', 'wetwet', 'wetwet', 'wetwetwet', 'SI', 'CARLOS MONGUE', 'I', 'Docente Investigador', 'wetwetwet', 'twetwet', 'twetwetwe', 'twetwe', 'wetewtewtewtewt', 'twetwet'),
(21, 1621655921, 'inv_asociado', 'erwer', 'facultad', 'img/attached/1621656929_1_aspectos_del_lexico_en_la_juventud_chalaca.pdf', 'werwer', 'werwer', 'werwer', 'werwe', 'SI', 'MARIA R.', 'II', 'Docente Investigador', 'rwerwerw', 'rwerew', 'rwer', 'werwe', 'werwer', 'wewer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigador_coordinador`
--

CREATE TABLE `investigador_coordinador` (
  `id` int(5) NOT NULL,
  `cod_reg` int(5) NOT NULL,
  `nombres` varchar(70) NOT NULL,
  `facultad` varchar(50) NOT NULL,
  `image_path` varchar(150) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `enlace` varchar(120) NOT NULL,
  `calificacion` varchar(5) NOT NULL,
  `grupo` varchar(70) NOT NULL,
  `nivel` varchar(10) NOT NULL,
  `codigo` varchar(15) NOT NULL,
  `scopus` varchar(20) NOT NULL,
  `tematicas` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `investigador_coordinador`
--

INSERT INTO `investigador_coordinador` (`id`, `cod_reg`, `nombres`, `facultad`, `image_path`, `cargo`, `telefono`, `correo`, `enlace`, `calificacion`, `grupo`, `nivel`, `codigo`, `scopus`, `tematicas`) VALUES
(1, 1621532912, 'KAYLINx', 'facultad', 'img/attached/1621532939_sample.pdf', 'fefe', '987654321', 'juan@colo.pe', 'http://localhost/comunidades/datos.php', 'SI', 'CARLOS MONGUE', 'II', 'BS', '121212', 'feee'),
(2, 1621535708, 'rwerwe', 'facultad', 'img/attached/1621535825_acceder_taller_de_facturacion_electronica.pdf.pdf', 'rwerwe', 'rwerwe', 'rwerwe', 'rwerwerwe', 'NO', 'MARIA R.', 'I', 'rwerwerwe', 'werwerwe', 'rwerwer'),
(3, 1621535882, 'rwerew', 'facultad', 'img/attached/1621535931_acceder_taller_de_facturacion_electronica.pdf.pdf', 'rwer', 'werwe', 'werwe', 'rwerwe', 'SI', 'CARLOS MONGUE', 'II', 'rwerwer', 'werwe', 'wrerwe'),
(4, 1621536074, 'lolu', 'facultad', 'img/attached/1621536135_sample.pdf', 'fefe', '87654321', 'juan@colo.pe', 'http://localhost/comunidades/datos.php', 'SI', 'MARIA R.', 'I', 'BS', '121212', 'feee'),
(5, 1621536402, 'lolu', 'facultad', 'img/attached/1621536423_sample.pdf', 'fefe', '87654321', 'juan@colo.pe', 'http://localhost/comunidades/datos.php', 'SI', 'MARIA R.', 'I', 'BS', '121212', 'feee'),
(6, 1621536889, 'fsdf', 'facultad', 'img/attached/1621536993_acceder_taller_de_facturacion_electronica.pdf.pdf', 'sdfsdf', 'fsdfsd', 'sdfsdfs', 'fsdfsd', 'SI', 'MARIA R.', 'II', 'fsdf', 'sdfsdfsd', 'sdfsd'),
(7, 1621542633, 'dgdfgdfg', 'facultad', 'img/attached/1621543127_acceder_taller_de_facturacion_electronica.pdf.pdf', 'gfdgdfg', '456445645', 'fds@hotmail.com', 'https://sihuas.yachay.pe:2083/cpsess6811559257/frontend/paper_lantern/index.html?login=1&post_login=31010906350273', 'SI', 'MARIA R.', 'I', '5334', 'gdgdfggd', 'gdfgdfgdg'),
(8, 1621555119, 'gdfg', 'facultad', 'img/attached/1621555376_', 'dfgdf', 'gd', 'gdfgd', 'gdfgdf', 'NO', 'MARIA R.', 'I', 'gdfgd', 'dgdfgdfg', 'dfgdf'),
(9, 1621617315, 'dfdsfsdf', 'facultad', 'img/attached/1621617395_acceder_taller_de_facturacion_electronica.pdf.pdf', 'sdfsdf', '543534', 'fsdfds@hotmail.com', 'https://sihuas.yachay.pe:2083/cpsess6811559257/3rdparty/phpMyAdmin/tbl_structure.php?db=joselivi_comunidades&table=facul', 'SI', 'CARLOS MONGUE', 'II', 'sdfsdf', 'fdsfsdf', 'sdfsdf'),
(10, 1621655921, 'tetw', 'facultad', 'img/attached/1621656064_1_aspectos_del_lexico_en_la_juventud_chalaca.pdf', 'ewtwet', 'wet', 'twt', 'ewtwet', 'SI', 'CARLOS MONGUE', 'III', 'tewtewtwe', 'twetw', 'tewtwe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_investigacion`
--

CREATE TABLE `linea_investigacion` (
  `id` int(11) NOT NULL,
  `linea` varchar(1000) NOT NULL,
  `fecha_agregado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `linea_investigacion`
--

INSERT INTO `linea_investigacion` (`id`, `linea`, `fecha_agregado`) VALUES
(27, 'Biodiversidad, ecologia y conservaciÃ³n', '2021-03-18'),
(28, 'Genetica, bioquimica y biotecnologia', '2021-03-18'),
(29, 'Microbiologia, parasitologia e inmunologia', '2021-03-18'),
(30, 'ZoologÃ­a y reproducciÃ³n animal', '2021-03-18'),
(31, 'Botanica y productos naturales', '2021-03-18'),
(32, ' Ecotoxicologia y quimica ambiental', '2021-03-18'),
(33, 'Polimeros naturales, sinteticos y funcionales', '2021-03-18'),
(34, 'Fisica nuclear y ambiental', '2021-03-18'),
(35, 'Matematica pura y aplicada', '2021-03-18'),
(36, 'Estadistica y Bioestadistica', '2021-03-18'),
(37, 'Desarrollo empresarial', '2021-03-18'),
(38, 'GestiÃ³n empresarial e inclusiÃ³n social', '2021-03-18'),
(39, 'InternacionalizaciÃ³n de MYPES y PYMES', '2021-03-18'),
(40, 'Herramientas informaticas para una gestiÃ³n eficiente y transparente', '2021-03-18'),
(41, 'Modelos economicos para el emprendimiento sostenible y adaptaciÃ³n al cambio climatico', '2021-03-18'),
(42, 'EconomÃ­a publica e internacional', '2021-03-18'),
(43, 'Finanzas, modelacion financiera, finanzas en PYMES', '2021-03-18'),
(44, 'Desarrollo alternativo en zonas urbanas', '2021-03-18'),
(45, 'EducaciÃ³n para la sociedad del conocimiento', '2021-03-18'),
(46, 'Procesos sociales, Periodismo y Comunicacion', '2021-03-18'),
(47, 'Antropologia, Arqueologia e Historia', '2021-03-18'),
(48, 'Ciudades Sostenibles', '2021-03-18'),
(49, 'Patrimonio cultural, interculturalidad e identidad', '2021-03-18'),
(50, 'Psicolinguistica en TICs', '2021-03-18'),
(51, 'Procesos jurÃ­dicos y resoluciones de conflictos', '2021-03-18'),
(52, 'Gobernabilidad,Derechos humanos e inclusion social', '2021-03-18'),
(53, 'SociabilizaciÃ³n y politica y conducta electoral', '2021-03-18'),
(54, 'Competitividad industrial, diversificaciÃ³n productiva y prospectiva', '2021-03-18'),
(55, 'Harina y aceite de pescado, conservas, congelados y recursos hidrobiologicos', '2021-03-18'),
(56, 'Condiciones oceanograficas y su impacto en los Recursos hidricos', '2021-03-18'),
(57, 'Tecnologias para residuos y pasivos ambientales, Bioremediacion', '2021-03-18'),
(58, 'Desarrollo de productos de la acuicultura', '2021-03-18'),
(59, 'Interaccion humana-computador', '2021-03-18'),
(60, 'Ingenieria de software, simulacion y desarrollo de TICs', '2021-03-18'),
(61, 'Sistemas de informacion y optimizacion', '2021-03-18'),
(62, 'Lenguajes de programacion', '2021-03-18'),
(63, 'Procesamiento digital de imagenes y seÃ±ales', '2021-03-18'),
(64, 'Sistemas inteligentes, Robotica, domotica', '2021-03-18'),
(65, 'Sistemas electricos y electronicos', '2021-03-18'),
(66, 'Construccion sostenible y sostenibilidad ambiental del territorio', '2021-03-18'),
(67, 'Desarrollo urbano-rural, Catastro,Prevencion de riesgos,Hidraulica y geotecnica', '2021-03-18'),
(68, 'Seguridad vial e infraestuctura de Transporte', '2021-03-18'),
(69, 'Salud publica', '2021-03-18'),
(70, 'Salud mental', '2021-03-18'),
(71, 'Psicologia de los procesos basicos y psicologia educativa', '2021-03-18'),
(72, 'Evaluacion Psicologica y Psicometrica', '2021-03-18'),
(73, 'Neurociencias del Comportamiento', '2021-03-18'),
(74, 'Genetica y bioquimica', '2021-03-18'),
(75, 'Biotecnologia en Salud', '2021-03-18'),
(76, 'Enfermedades infecciosas y no infecciosas tropicales', '2021-03-18'),
(77, 'Microbiologia y Parasitologia', '2021-03-18'),
(78, 'Biologia Cecular y Molecular', '2021-03-18'),
(79, 'Fisica medica  y terapias', '2021-03-18'),
(80, 'Biomateriales', '2021-03-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_user`
--

CREATE TABLE `linea_user` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `linea` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `linea_user`
--

INSERT INTO `linea_user` (`id`, `id_user`, `linea`) VALUES
(18, 84, 'Biodiversidad, ecologia y conservaciÃ³n'),
(19, 84, 'Botanica y productos naturales'),
(20, 84, 'Genetica, bioquimica y biotecnologia'),
(21, 86, 'ZoologÃ­a y reproducciÃ³n animal'),
(22, 86, ' Ecotoxicologia y quimica ambiental');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pc_actividades`
--

CREATE TABLE `pc_actividades` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pc_actividades`
--

INSERT INTO `pc_actividades` (`id`, `id_user`, `actividad`, `fecha`) VALUES
(1, 76, 'gfh', '2021-03-14'),
(2, 76, 'gfh', '2021-03-14'),
(3, 75, 'y', '2021-03-14'),
(4, 84, 'gfhg', '2021-03-26'),
(5, 84, 'jhgfhfg', '2021-03-26'),
(6, 84, 'fghgfh', '2021-03-26'),
(7, 86, '1', '2021-04-06'),
(8, 86, 'fghgfhgf', '2021-05-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pc_actividades2`
--

CREATE TABLE `pc_actividades2` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pc_actividades2`
--

INSERT INTO `pc_actividades2` (`id`, `id_user`, `actividad`, `fecha`) VALUES
(1, 76, 'gfh', '2021-03-14'),
(2, 76, 'gfh', '2021-03-14'),
(3, 75, 'y', '2021-03-14'),
(4, 84, 'fghfgh', '2021-03-26'),
(5, 84, 'fghfgh', '2021-03-26'),
(6, 90, 'dfgfdgdfg', '2021-04-08'),
(7, 91, 'fsfsd', '2021-04-09'),
(8, 91, 'dfgdfg', '2021-04-09'),
(9, 91, 'gdfgd', '2021-04-09'),
(10, 96, 'sfsdfsdf', '2021-04-09'),
(11, 5, 'FDGDFGFD', '2021-05-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pc_actividades3`
--

CREATE TABLE `pc_actividades3` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pc_actividades4`
--

CREATE TABLE `pc_actividades4` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_trabajo`
--

CREATE TABLE `plan_trabajo` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `a1` int(11) DEFAULT NULL,
  `a2` int(11) DEFAULT NULL,
  `a3` int(11) DEFAULT NULL,
  `a4` int(11) DEFAULT NULL,
  `a5` int(11) DEFAULT NULL,
  `a6` int(11) DEFAULT NULL,
  `b1` int(11) DEFAULT NULL,
  `b2` int(11) DEFAULT NULL,
  `c1` int(11) DEFAULT NULL,
  `c2` int(11) DEFAULT NULL,
  `d1` int(11) DEFAULT NULL,
  `e1` int(11) DEFAULT NULL,
  `e2` int(11) DEFAULT NULL,
  `e3` int(11) DEFAULT NULL,
  `e4` int(11) DEFAULT NULL,
  `e5` int(11) DEFAULT NULL,
  `f1` int(11) DEFAULT NULL,
  `f2` int(11) DEFAULT NULL,
  `f3` int(11) DEFAULT NULL,
  `f4` int(11) DEFAULT NULL,
  `f5` int(11) DEFAULT NULL,
  `f6` int(11) DEFAULT NULL,
  `pdf` varchar(1000) NOT NULL,
  `fecha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plan_trabajo`
--

INSERT INTO `plan_trabajo` (`id`, `id_user`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `b1`, `b2`, `c1`, `c2`, `d1`, `e1`, `e2`, `e3`, `e4`, `e5`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `pdf`, `fecha`) VALUES
(7, 86, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '1617742034_1.pdf', '2021-04-06'),
(12, 91, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1617983896_8.pdf', '2021-04-09'),
(13, 93, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1617986676_1.pdf', '2021-04-09'),
(14, 94, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1617987056_1.pdf', '2021-04-09'),
(15, 96, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1618002743_Big+Data+-+Luis+Joyanes.pdf', '2021-04-09'),
(16, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1618010883_onmu-2015-resultado-sec-5.pdf', '2021-04-09'),
(17, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1620063204_revisado.pdf', '2021-05-03'),
(18, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1621346790_DR.  JAIMES PLAN DE TRABAJO 2021.pdf', '2021-05-18'),
(19, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1621555683_ACCEDER_TALLER_DE_FACTURACION_ELECTRONICA.pdf.pdf', '2021-05-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion_actividades1`
--

CREATE TABLE `produccion_actividades1` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `produccion_actividades1`
--

INSERT INTO `produccion_actividades1` (`id`, `id_user`, `actividad`, `fecha`) VALUES
(1, 76, 'gfhfg', '2021-03-14'),
(2, 76, 'gfhfg', '2021-03-14'),
(3, 75, 'eretre', '2021-03-14'),
(4, 75, 'yut', '2021-03-16'),
(5, 78, 'xcxzczx', '2021-03-17'),
(6, 81, 'ICGI', '2021-03-17'),
(7, 84, 'La toma de requerimientos y el flujo de trabajo', '2021-03-25'),
(8, 84, 'fddsfdsfd', '2021-03-25'),
(9, 84, 'dfgd', '2021-03-25'),
(10, 84, 'jkkb', '2021-03-25'),
(11, 84, 'kpok', '2021-03-25'),
(12, 85, 'dasdasda', '2021-03-29'),
(13, 85, 'asdsadsa', '2021-03-29'),
(14, 86, '1', '2021-04-06'),
(15, 86, 'dfgdfgfdg', '2021-05-01'),
(16, 86, 'hjhgjg', '2021-06-13'),
(17, 86, 'jghj', '2021-04-07'),
(18, 90, 'fsfsdfs', '2021-04-08'),
(19, 92, 'hihiui', '2021-04-08'),
(20, 92, 'xxxxxx', '2021-04-08'),
(21, 91, 'dddd', '2021-04-09'),
(22, 91, 'fsdfds', '2021-04-09'),
(23, 93, 'fsdfsdfdsfsdf', '2021-04-09'),
(24, 93, 'sfsdfsdfs', '2021-04-09'),
(25, 96, 'sdffsfsdf', '2021-04-09'),
(26, 96, 'sfsfsdfsfs', '2021-04-09'),
(27, 96, 'fsfsdfsdfsfsfs', '2021-04-09'),
(28, 2, 'rtyr', '2021-04-09'),
(29, 5, 'aÃ±j', '2021-05-21'),
(30, 5, '30', '2021-05-21'),
(31, 5, '10', '2021-05-22'),
(32, 5, 'rwerwerwe', '2021-05-22'),
(33, 5, 'gsf', '2021-05-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion_actividades2`
--

CREATE TABLE `produccion_actividades2` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `produccion_actividades2`
--

INSERT INTO `produccion_actividades2` (`id`, `id_user`, `actividad`, `fecha`) VALUES
(1, 76, 'fgh', '2021-03-14'),
(2, 76, 'fgh', '2021-03-14'),
(3, 75, 'ytu', '2021-03-14'),
(4, 84, 'hgjgh', '2021-03-25'),
(5, 84, 'hhohho', '2021-03-25'),
(6, 84, 'kllj', '2021-03-25'),
(7, 84, 'kjkjkn', '2021-03-25'),
(8, 84, 'dgdfg', '2021-03-25'),
(9, 86, 'jghjghjghjg', '2021-06-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion_actividades3`
--

CREATE TABLE `produccion_actividades3` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `produccion_actividades3`
--

INSERT INTO `produccion_actividades3` (`id`, `id_user`, `actividad`, `fecha`) VALUES
(1, 76, 'fghf', '2021-03-14'),
(2, 76, 'fghf', '2021-03-14'),
(3, 75, 'yuyt', '2021-03-14'),
(4, 84, 'dsfdsf', '2021-03-25'),
(5, 84, 'dfgfdgdf', '2021-03-25'),
(6, 84, 'dfgdfgd', '2021-03-25'),
(7, 84, 'dfgg', '2021-03-25'),
(8, 84, 'fdgdfgd', '2021-03-25'),
(9, 86, 'jghjghjghj', '2021-06-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion_actividades4`
--

CREATE TABLE `produccion_actividades4` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(100) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `produccion_actividades4`
--

INSERT INTO `produccion_actividades4` (`id`, `id_user`, `actividad`, `fecha`) VALUES
(1, 76, 'ghgfh', '2021-03-14'),
(2, 76, 'ghgfh', '2021-03-14'),
(3, 75, 'yu', '2021-03-14'),
(4, 84, 'fsdf', '2021-03-26'),
(5, 84, 'fsdfdsf', '2021-03-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion_actividades5`
--

CREATE TABLE `produccion_actividades5` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(100) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `produccion_actividades5`
--

INSERT INTO `produccion_actividades5` (`id`, `id_user`, `actividad`, `fecha`) VALUES
(1, 76, 'gfhgf', '2021-03-14'),
(2, 76, 'gfhgf', '2021-03-14'),
(3, 75, 'y', '2021-03-14'),
(4, 84, 'sdfdsfds', '2021-03-26'),
(5, 84, 'sdfdsf', '2021-03-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion_actividades6`
--

CREATE TABLE `produccion_actividades6` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `produccion_actividades6`
--

INSERT INTO `produccion_actividades6` (`id`, `id_user`, `actividad`, `fecha`) VALUES
(1, 76, 'fghfgh', '2021-03-14'),
(2, 76, 'fghfgh', '2021-03-14'),
(3, 75, 'y', '2021-03-14'),
(4, 84, 'sfdsfdsf', '2021-03-26'),
(5, 84, 'sfsdfsdf', '2021-03-26'),
(6, 84, 'sdfsdfsd', '2021-03-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion_cientifica`
--

CREATE TABLE `produccion_cientifica` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `d1` varchar(1000) NOT NULL,
  `d2` varchar(1000) NOT NULL,
  `d3` varchar(1000) NOT NULL,
  `d4` varchar(1000) NOT NULL,
  `d5` varchar(1000) NOT NULL,
  `d6` varchar(1000) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_comunidad`
--

CREATE TABLE `tipo_comunidad` (
  `id` int(5) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_comunidad`
--

INSERT INTO `tipo_comunidad` (`id`, `descripcion`) VALUES
(1, 'Centros de Investigaci&oacute;n'),
(2, 'Laboratorios de investigaci&oacute;n'),
(3, 'Grupos de investigaci&oacute;n'),
(4, 'Red de investigaci&oacute;n'),
(5, 'Instituto Especializado'),
(6, 'Programas de Investigaci&oacute;n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulo`
--

CREATE TABLE `titulo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(1000) NOT NULL,
  `pais` varchar(1000) NOT NULL,
  `especialidad` varchar(100) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `titulo`
--

INSERT INTO `titulo` (`id`, `titulo`, `pais`, `especialidad`, `tipo`, `id_user`) VALUES
(1, 'CADASDD', 'Serbia y Montenegro', 'DASDADAS', 'Titulado', 81),
(2, 'BJGHJ', 'Rumania', 'HGJGJGJ', 'Maestria', 81),
(3, 'Ingenieria de sistemas', 'PerÃº', 'TecnologÃ­as de InformaciÃ³n', 'Maestria', 84),
(4, 'dfgdfgdf', 'Alemania', 'dfgdfgdfgdf', 'Bachiller', 86);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_archivos`
--

CREATE TABLE `t_archivos` (
  `id_archivos` int(11) NOT NULL,
  `id_comunidad` int(11) DEFAULT NULL,
  `id_plan_trabajo` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `ruta` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `tipo` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `ext` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `nombre_original` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `prod_cientifica` int(11) DEFAULT NULL,
  `res_decanal` int(11) DEFAULT NULL,
  `res_vrin` int(11) DEFAULT NULL,
  `solicitud` int(11) DEFAULT NULL,
  `tipo_archivo_prod` int(11) DEFAULT NULL,
  `url` text COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `plan_trabajo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `t_archivos`
--

INSERT INTO `t_archivos` (`id_archivos`, `id_comunidad`, `id_plan_trabajo`, `nombre`, `ruta`, `tipo`, `ext`, `nombre_original`, `prod_cientifica`, `res_decanal`, `res_vrin`, `solicitud`, `tipo_archivo_prod`, `url`, `plan_trabajo`) VALUES
(1, 2, NULL, '2021-07-25-170314-2.pdf', '../../../archivos/comunidad/2021-07-25-170314-2.pdf', 'archivo', 'pdf', '2021-07-21-181125-22.pdf', NULL, NULL, NULL, 1, NULL, NULL, NULL),
(2, 2, NULL, '2021-07-25-170323-2.pdf', '../../../archivos/comunidad/2021-07-25-170323-2.pdf', 'archivo', 'pdf', '2021-07-21-180921-28 (1).pdf', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(3, 2, NULL, '2021-07-25-170327-2.pdf', '../../../archivos/comunidad/2021-07-25-170327-2.pdf', 'archivo', 'pdf', '2021-07-21-180921-28.pdf', NULL, NULL, 1, NULL, NULL, NULL, NULL),
(4, 2, NULL, '2021-07-25-170336-2.pdf', '../../../archivos/comunidad/2021-07-25-170336-2.pdf', '1', 'pdf', '2021-07-21-175337-28.pdf', NULL, NULL, NULL, NULL, 1, 'dfgdfgdf', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_archivos_personas`
--

CREATE TABLE `t_archivos_personas` (
  `id_archivos` int(11) NOT NULL,
  `id_miembro` int(11) DEFAULT NULL,
  `id_egresado` int(11) DEFAULT NULL,
  `id_coordinador` int(11) DEFAULT NULL,
  `id_estudiante` int(11) DEFAULT NULL,
  `id_investigador` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `ruta` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `tipo` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `ext` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `nombre_original` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `cti_vitae_coordinador` int(11) DEFAULT NULL,
  `cti_vitae_investigador` int(11) DEFAULT NULL,
  `cti_vitae_estudiante` int(11) DEFAULT NULL,
  `cti_vitae_egresado` int(11) DEFAULT NULL,
  `cti_vitae_miembro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_cat_facultades`
--

CREATE TABLE `t_cat_facultades` (
  `id_facultad` int(11) NOT NULL,
  `nombre` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_cat_facultades`
--

INSERT INTO `t_cat_facultades` (`id_facultad`, `nombre`) VALUES
(1, 'FACULTAD DE ADMINISTRACIÓN'),
(2, 'FACULTAD DE ARQUITECTURA Y URBANISMO'),
(3, 'FACULTAD DE CIENCIAS ECONÓMICAS'),
(4, 'FACULTAD DE CIENCIAS FINANCIERAS Y CONTABLES'),
(5, 'FACULTAD DE CIENCIAS NATURALES Y MATEMÁTICA'),
(6, 'FACULTAD DE CIENCIAS SOCIALES'),
(7, 'FACULTAD DE DERECHO Y CIENCIA POLÍTICA'),
(8, 'FACULTAD DE EDUCACIÓN'),
(9, 'FACULTAD DE HUMANIDADES'),
(10, 'FACULTAD DE INGENIERÍA CIVIL'),
(11, 'FACULTAD DE INGENIERÍA ELECTRÓNICA E INFORMÁTICA'),
(12, 'FACULTAD DE INGENIERÍA GEOGRÁFICA Y AMBIENTAL'),
(13, 'FACULTAD DE INGENIERÍA INDUSTRIAL Y SISTEMAS'),
(14, 'FACULTAD DE MEDICINA'),
(15, 'FACULTAD DE ODONTOLOGÍA'),
(16, 'FACULTAD DE OCEANOGRAFÍA, PESQUERA Y CIENCIAS ALIMENTARIAS'),
(17, 'FACULTAD DE PSICOLOGÍA'),
(18, 'FACULTAD DE TECNOLOGIA MÉDICA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_cat_lineas`
--

CREATE TABLE `t_cat_lineas` (
  `id_linea` int(11) NOT NULL,
  `nombre` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_cat_lineas`
--

INSERT INTO `t_cat_lineas` (`id_linea`, `nombre`) VALUES
(1, 'BIODIVERSIDAD, ECOLOGÍA Y CONSERVACIÓN'),
(2, 'GENETICA, BIOQUIMICA Y BIOTECNOLOGÍA'),
(3, 'MICROBIOLOGIA, PARASITOLOGIA E INMUNOLOGIA'),
(4, 'ZOOLOGÍA Y REPRODUCCIÓN ANIMAL                        '),
(5, 'BOTANICA Y PRODUCTOS NATURALES'),
(6, 'ECOTOXICOLOGIA Y QUIMICA AMBIENTAL'),
(7, 'POLIMEROS NATURALES, SINTETICOS Y FUNCIONALES'),
(8, 'FÍSICA NUCLEAR Y AMBIENTAL'),
(9, 'MATEMÁTICA PURA Y APLICADA'),
(10, 'ESTADÍSTICA Y ESTADÍSTICA'),
(11, 'DESARROLLO EMPRESARIAL'),
(12, 'GESTIÓN EMPRESARIAL E INCLUSIÓN SOCIAL'),
(13, 'INTERNACIONALIZACIÓN DE MYPES Y PYMES'),
(14, 'HERRAMIENTAS INFORMÁTICAS PARA UNA GESTIÓN EFICIENTE Y TRANSPARENTE'),
(15, 'MODELOS ECONÓMICOS PARA EL EMPRENDIMIENTO SOSTENIBLE Y ADAPTACIÓN AL CAMBIO CLIMÁTICO'),
(16, 'ECONOMÍA PUBLICA E INTERNACIONAL'),
(17, 'FINANZAS, MODELACION FINANCIERA, FINANZAS EN PYMES'),
(18, 'DESARROLLO ALTERNATIVO EN ZONAS URBANAS'),
(19, 'EDUCACIÓN PARA LA SOCIEDAD DEL CONOCIMIENTO'),
(20, 'PROCESOS SOCIALES, PERIODISMO Y COMUNICACIÓN'),
(21, 'ANTROPOLOGIA, ARQUEOLOGIA E HISTORIA'),
(22, 'CIUDADES SOSTENIBLES'),
(23, 'PSICOLINGUISTICA EN TICS'),
(24, 'PROCESOS JURÍDICOS Y RESOLUCIONES DE CONFLICTOS'),
(25, 'GOBERNABILIDAD,DERECHOS HUMANOS E INCLUSION SOCIAL'),
(26, 'SOCIABILIZACIÓN Y POLITICA Y CONDUCTA ELECTORAL'),
(27, 'COMPETITIVIDAD INDUSTRIAL, DIVERSIFICACIÓN PRODUCTIVA Y PROSPECTIVA'),
(28, 'HARINA Y ACEITE DE PESCADO, CONSERVAS, CONGELADOS Y RECURSOS HIDROBIOLÓGICOS'),
(29, 'CONDICIONES OCEANOGRAFÍAS Y SU IMPACTO EN LOS RECURSOS HIDRICOS'),
(30, 'TECNOLOGÍAS PARA RESIDUOS Y PASIVOS AMBIENTALES, BIOREMEDIACION'),
(31, 'DESARROLLO DE PRODUCTOS DE LA ACUICULTURA'),
(32, 'INTERACCIÓN HUMANA-COMPUTADOR'),
(33, 'INGENIERÍA DE SOFTWARE, SIMULACIÓN Y DESARROLLO DE TICS'),
(34, 'SISTEMAS DE INFORMACIÓN Y OPTIMIZACION'),
(35, 'LENGUAJES DE PROGRAMACIÓN'),
(36, 'PROCESAMIENTO DIGITAL DE IMÁGENES Y SEÑALES'),
(37, 'SISTEMAS INTELIGENTES, ROBÓTICA, DOMÓTICA'),
(38, 'SISTEMAS ELÉCTRICOS Y ELECTRÓNICOS'),
(39, 'CONSTRUCCIÓN SOSTENIBLE Y SOSTENIBILIDAD AMBIENTAL DEL TERRITORIO'),
(40, 'DESARROLLO URBANO-RURAL, CATASTRO, PREVENCIÓN DE RIESGOS, HIDRÁULICA Y GEOTÉCNICA'),
(41, 'SEGURIDAD VIAL E INFRAESTRUCTURA DE TRANSPORTE'),
(42, 'SALUD PUBLICA'),
(43, 'SALUD MENTAL'),
(44, 'PSICOLOGÍA DE LOS PROCESOS BÁSICOS Y PSICOLOGÍA EDUCATIVA'),
(45, 'EVALUACIÓN PSICOLÓGICA Y PSICOMÉTRICA'),
(46, 'NEUROCIENCIAS DEL COMPORTAMIENTO'),
(47, 'GENÉTICA Y BIOQUÍMICA'),
(48, 'BIOTECNOLOGÍA EN SALUD'),
(49, 'ENFERMEDADES INFECCIOSAS Y NO INFECCIOSAS TROPICALES'),
(50, 'MICROBIOLOGÍA Y PARASITOLOGÍA'),
(51, 'BIOLOGÍA CELULAR Y MOLECULAR'),
(52, 'FÍSICA MEDICA Y TERAPIAS'),
(53, 'BIOMATERIALES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_coordinador`
--

CREATE TABLE `t_coordinador` (
  `id_coordinador` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_comunidad` int(11) DEFAULT NULL,
  `dni` int(11) DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `cargo` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `correo` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `enlace_cti_vitae` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `calif_renacyt` int(11) DEFAULT NULL,
  `grupo` int(11) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `codigo_orcid` int(11) DEFAULT NULL,
  `scopusId` int(11) DEFAULT NULL,
  `tematicas` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  `categoria` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `dedicacion` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_egresados`
--

CREATE TABLE `t_egresados` (
  `id_egresado` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `dni` int(11) DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `correo` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `facultad` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `t_egresados`
--

INSERT INTO `t_egresados` (`id_egresado`, `id_user`, `dni`, `nombre`, `apellidos`, `telefono`, `correo`, `facultad`) VALUES
(7, 5, 123, 'Yair', 'apellidos', '12-12-12', 'correo@correo', '1'),
(8, 5, 123, 'iouyiuyiuyiu', 'apellidos', '12-12-12', 'correo@correo', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_estudiantes`
--

CREATE TABLE `t_estudiantes` (
  `id_estudiante` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `dni` int(11) DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `correo` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `facultad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `t_estudiantes`
--

INSERT INTO `t_estudiantes` (`id_estudiante`, `id_user`, `dni`, `nombre`, `apellidos`, `telefono`, `correo`, `facultad`) VALUES
(9, 5, 123, 'Yair', 'apellidos', '123', 'correo@correo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_investigador`
--

CREATE TABLE `t_investigador` (
  `id_investigador` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_comunidad` int(11) DEFAULT NULL,
  `dni` int(11) DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `cargo` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `correo` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `enlace_cti_vitae` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `calif_renacyt` int(11) DEFAULT NULL,
  `grupo` int(11) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `codigo_orcid` int(11) DEFAULT NULL,
  `scopusId` int(11) DEFAULT NULL,
  `tipo_investigador` int(11) DEFAULT NULL,
  `clase` int(11) DEFAULT NULL,
  `titulo_especialidad` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `grado_academico` int(11) DEFAULT NULL,
  `area` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `notas` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  `especificacion` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_miembros`
--

CREATE TABLE `t_miembros` (
  `id_miembro` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_comunidad` int(11) DEFAULT NULL,
  `tipo_doc_identidad` int(11) DEFAULT NULL,
  `no_doc` int(11) DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `correo` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `afiliacion` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `tipo_miembro` int(11) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  `facultad` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `codigo_estudiante` int(11) DEFAULT NULL,
  `condicion` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `t_miembros`
--

INSERT INTO `t_miembros` (`id_miembro`, `id_user`, `id_comunidad`, `tipo_doc_identidad`, `no_doc`, `nombre`, `apellidos`, `telefono`, `correo`, `afiliacion`, `tipo_miembro`, `estatus`, `facultad`, `codigo_estudiante`, `condicion`) VALUES
(1, 13, 3, 1, 434343242, 'TRYRTYTR', 'REWRWE', '6456', 'TRYRTYRTY@HOTMAIL.COM', 'TRYTRYTRY', 2, 1, '3', 0, '1'),
(7, 13, 3, 1, 44111904, 'ronald', 'guerra olivares', '3881190', 'kpeski2814@hotmail.com', 'UNFV', 1, 1, '4', 2814, '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_plan_trabajo`
--

CREATE TABLE `t_plan_trabajo` (
  `id_plan_trabajo` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_comunidad` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(245) DEFAULT NULL,
  `apellido` varchar(445) DEFAULT NULL,
  `username` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `rol` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `username`, `password`, `rol`) VALUES
(11, 'Rocio', 'Chavez', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'administrador'),
(13, 'Ronald', 'Guerra Olivares', 'prueba', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'coordinador'),
(18, 'tyu', 'ytuty', 'tryrtyt', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'coordinador'),
(19, 'yrtyrty', 'ytryrt', 'tryrtyt', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'coordinador'),
(20, 'yrtytr', 'yrty', 'tryrtyt', '123', 'coordinador'),
(21, 'utyu', 'uyt', 'tryrtytutyu', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'coordinador'),
(22, 'ghgf', 'ghfgh', 'tryrtyt', '123', 'coordinador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `capacitacion`
--
ALTER TABLE `capacitacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compromiso_actividades`
--
ALTER TABLE `compromiso_actividades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compromiso_actividades2`
--
ALTER TABLE `compromiso_actividades2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compromiso_actividades3`
--
ALTER TABLE `compromiso_actividades3`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compromiso_actividades4`
--
ALTER TABLE `compromiso_actividades4`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compromiso_actividades5`
--
ALTER TABLE `compromiso_actividades5`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compromiso_actividades6`
--
ALTER TABLE `compromiso_actividades6`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comunidad`
--
ALTER TABLE `comunidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comunidad_attached`
--
ALTER TABLE `comunidad_attached`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comunidad_modal`
--
ALTER TABLE `comunidad_modal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_docente`
--
ALTER TABLE `datos_docente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doc_produccion`
--
ALTER TABLE `doc_produccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gestion`
--
ALTER TABLE `gestion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gestion1`
--
ALTER TABLE `gestion1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gestion2`
--
ALTER TABLE `gestion2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gestion3`
--
ALTER TABLE `gestion3`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gestion4`
--
ALTER TABLE `gestion4`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gestion5`
--
ALTER TABLE `gestion5`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `investigacion_actividades1`
--
ALTER TABLE `investigacion_actividades1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `investigacion_actividades2`
--
ALTER TABLE `investigacion_actividades2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `investigacion_formativa`
--
ALTER TABLE `investigacion_formativa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `investigador`
--
ALTER TABLE `investigador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `investigador_coordinador`
--
ALTER TABLE `investigador_coordinador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `linea_investigacion`
--
ALTER TABLE `linea_investigacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `linea_user`
--
ALTER TABLE `linea_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pc_actividades`
--
ALTER TABLE `pc_actividades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pc_actividades2`
--
ALTER TABLE `pc_actividades2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pc_actividades3`
--
ALTER TABLE `pc_actividades3`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pc_actividades4`
--
ALTER TABLE `pc_actividades4`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plan_trabajo`
--
ALTER TABLE `plan_trabajo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `produccion_actividades1`
--
ALTER TABLE `produccion_actividades1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `produccion_actividades2`
--
ALTER TABLE `produccion_actividades2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `produccion_actividades3`
--
ALTER TABLE `produccion_actividades3`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `produccion_actividades4`
--
ALTER TABLE `produccion_actividades4`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `produccion_actividades5`
--
ALTER TABLE `produccion_actividades5`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `produccion_actividades6`
--
ALTER TABLE `produccion_actividades6`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `produccion_cientifica`
--
ALTER TABLE `produccion_cientifica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_comunidad`
--
ALTER TABLE `tipo_comunidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `titulo`
--
ALTER TABLE `titulo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_archivos`
--
ALTER TABLE `t_archivos`
  ADD PRIMARY KEY (`id_archivos`);

--
-- Indices de la tabla `t_archivos_personas`
--
ALTER TABLE `t_archivos_personas`
  ADD PRIMARY KEY (`id_archivos`);

--
-- Indices de la tabla `t_cat_facultades`
--
ALTER TABLE `t_cat_facultades`
  ADD PRIMARY KEY (`id_facultad`);

--
-- Indices de la tabla `t_cat_lineas`
--
ALTER TABLE `t_cat_lineas`
  ADD PRIMARY KEY (`id_linea`);

--
-- Indices de la tabla `t_coordinador`
--
ALTER TABLE `t_coordinador`
  ADD PRIMARY KEY (`id_coordinador`);

--
-- Indices de la tabla `t_egresados`
--
ALTER TABLE `t_egresados`
  ADD PRIMARY KEY (`id_egresado`);

--
-- Indices de la tabla `t_estudiantes`
--
ALTER TABLE `t_estudiantes`
  ADD PRIMARY KEY (`id_estudiante`);

--
-- Indices de la tabla `t_investigador`
--
ALTER TABLE `t_investigador`
  ADD PRIMARY KEY (`id_investigador`);

--
-- Indices de la tabla `t_miembros`
--
ALTER TABLE `t_miembros`
  ADD PRIMARY KEY (`id_miembro`);

--
-- Indices de la tabla `t_plan_trabajo`
--
ALTER TABLE `t_plan_trabajo`
  ADD PRIMARY KEY (`id_plan_trabajo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `capacitacion`
--
ALTER TABLE `capacitacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `compromiso_actividades`
--
ALTER TABLE `compromiso_actividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `compromiso_actividades2`
--
ALTER TABLE `compromiso_actividades2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `compromiso_actividades3`
--
ALTER TABLE `compromiso_actividades3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `compromiso_actividades4`
--
ALTER TABLE `compromiso_actividades4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `compromiso_actividades5`
--
ALTER TABLE `compromiso_actividades5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `compromiso_actividades6`
--
ALTER TABLE `compromiso_actividades6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `comunidad`
--
ALTER TABLE `comunidad`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `comunidad_attached`
--
ALTER TABLE `comunidad_attached`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `comunidad_modal`
--
ALTER TABLE `comunidad_modal`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de la tabla `datos_docente`
--
ALTER TABLE `datos_docente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `doc_produccion`
--
ALTER TABLE `doc_produccion`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `facultad`
--
ALTER TABLE `facultad`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `gestion`
--
ALTER TABLE `gestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gestion1`
--
ALTER TABLE `gestion1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `gestion2`
--
ALTER TABLE `gestion2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `gestion3`
--
ALTER TABLE `gestion3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `gestion4`
--
ALTER TABLE `gestion4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `gestion5`
--
ALTER TABLE `gestion5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `investigacion_actividades1`
--
ALTER TABLE `investigacion_actividades1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `investigacion_actividades2`
--
ALTER TABLE `investigacion_actividades2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `investigacion_formativa`
--
ALTER TABLE `investigacion_formativa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `investigador`
--
ALTER TABLE `investigador`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `investigador_coordinador`
--
ALTER TABLE `investigador_coordinador`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `linea_investigacion`
--
ALTER TABLE `linea_investigacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `linea_user`
--
ALTER TABLE `linea_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `pc_actividades`
--
ALTER TABLE `pc_actividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pc_actividades2`
--
ALTER TABLE `pc_actividades2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `pc_actividades3`
--
ALTER TABLE `pc_actividades3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pc_actividades4`
--
ALTER TABLE `pc_actividades4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plan_trabajo`
--
ALTER TABLE `plan_trabajo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `produccion_actividades1`
--
ALTER TABLE `produccion_actividades1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `produccion_actividades2`
--
ALTER TABLE `produccion_actividades2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `produccion_actividades3`
--
ALTER TABLE `produccion_actividades3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `produccion_actividades4`
--
ALTER TABLE `produccion_actividades4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `produccion_actividades5`
--
ALTER TABLE `produccion_actividades5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `produccion_actividades6`
--
ALTER TABLE `produccion_actividades6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `produccion_cientifica`
--
ALTER TABLE `produccion_cientifica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_comunidad`
--
ALTER TABLE `tipo_comunidad`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `titulo`
--
ALTER TABLE `titulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `t_archivos`
--
ALTER TABLE `t_archivos`
  MODIFY `id_archivos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `t_archivos_personas`
--
ALTER TABLE `t_archivos_personas`
  MODIFY `id_archivos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `t_cat_facultades`
--
ALTER TABLE `t_cat_facultades`
  MODIFY `id_facultad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `t_cat_lineas`
--
ALTER TABLE `t_cat_lineas`
  MODIFY `id_linea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `t_coordinador`
--
ALTER TABLE `t_coordinador`
  MODIFY `id_coordinador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `t_egresados`
--
ALTER TABLE `t_egresados`
  MODIFY `id_egresado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `t_estudiantes`
--
ALTER TABLE `t_estudiantes`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `t_investigador`
--
ALTER TABLE `t_investigador`
  MODIFY `id_investigador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `t_miembros`
--
ALTER TABLE `t_miembros`
  MODIFY `id_miembro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `t_plan_trabajo`
--
ALTER TABLE `t_plan_trabajo`
  MODIFY `id_plan_trabajo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

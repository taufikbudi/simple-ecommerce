-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 01. Mei 2014 jam 22:57
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simpl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `number_customer` int(5) DEFAULT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `address_1` varchar(75) DEFAULT NULL,
  `address_2` varchar(75) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `post_code` int(9) DEFAULT NULL,
  `mail` varchar(35) DEFAULT NULL,
  KEY `number_customer` (`number_customer`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_customer`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order_count`
--

CREATE TABLE IF NOT EXISTS `tbl_order_count` (
  `order_number` int(5) DEFAULT NULL,
  `quantity_order` int(5) DEFAULT NULL,
  `product_number` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_order_count`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order_tmp`
--

CREATE TABLE IF NOT EXISTS `tbl_order_tmp` (
  `hidden_order` int(5) DEFAULT NULL,
  `session_order` varchar(30) DEFAULT NULL,
  `quantity_order` int(3) DEFAULT NULL,
  `no_product_order` int(5) DEFAULT NULL,
  KEY `hidden_order` (`hidden_order`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_order_tmp`
--

INSERT INTO `tbl_order_tmp` (`hidden_order`, `session_order`, `quantity_order`, `no_product_order`) VALUES
(NULL, 'uq8gv71j9gdjrmuinthe34t7n5', 1, 0),
(NULL, 'uq8gv71j9gdjrmuinthe34t7n5', 2, 0),
(NULL, 'uq8gv71j9gdjrmuinthe34t7n5', 3, 0),
(NULL, 'uq8gv71j9gdjrmuinthe34t7n5', 3, 0),
(NULL, 'uq8gv71j9gdjrmuinthe34t7n5', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
  `no_product` int(5) NOT NULL AUTO_INCREMENT,
  `date_add_product` date DEFAULT NULL,
  `name_product` varchar(20) NOT NULL,
  `desc_product` text NOT NULL,
  `price_product` decimal(10,2) DEFAULT NULL,
  KEY `no_product` (`no_product`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tbl_products`
--

INSERT INTO `tbl_products` (`no_product`, `date_add_product`, `name_product`, `desc_product`, `price_product`) VALUES
(1, '2014-05-01', 'Topi', 'topi merah', '35000.00'),
(2, '2014-05-01', 'Topi Hijau', 'topi hijau', '40000.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

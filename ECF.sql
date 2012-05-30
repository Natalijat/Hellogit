-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2012 at 10:49 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecfdb`
--
CREATE DATABASE `ecfdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ecfdb`;

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE IF NOT EXISTS `aboutus` (
  `id` tinyint(4) NOT NULL,
  `aboutbox` text NOT NULL,
  `maincontent` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `aboutbox`, `maincontent`) VALUES
(1, '<p>The Evan Cornish Foundation was created in memory of the late Evan Cornish...</p>\r\n<p class="small-text">(Photo: Receiving his CBE for his outstanding contributions to industry in October 1988)</p>', '<p>The Evan Cornish Foundation was created in memory of the late Evan Cornish, a successful businessman who passed away in 2002, by his wife Ethel and four daughters. The Trustees decided to utilise funds in his name for the benefit of charitable activities in the local, national and international communities.</p>\r\n<p>A Grant Making charitable organisation, The Evan Cornish Foundation was constituted by Trust Deed dated 27 June 2005 and became a Registered Charity, number 1112703, on 12 January 2006. Further details about our registration with the Charity Commission and regulated information can be found at their website <a href="http://www.charity-commission.gov.uk" target="_blank">www.charity-commission.gov.uk.</a></p>\r\n<p>Members of Association of Charitable Foundations - <a href="http://www.acf.org.uk" target="_blank">www.acf.org.uk</a></p>\r\n<p><a href="our-aims.php?phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1" class="red-btn">Find out more about our aims</a></p>\r\n<hr />\r\n<h3>Trustees</h3>\r\n<p>The Foundation has three Trustees who are responsible for the day to day management of the organisation and who make all decisions on its behalf. The Trustees are:</p>\r\n<ul>\r\n<li>Sally Cornish</li>\r\n<li>Barbara Ward</li>\r\n<li>Rachel Cornish</li>\r\n</ul>\r\n<p>The Trustees are supported on administrative matters by:</p>\r\n<ul>\r\n<li>Charity Administrator - Jayne Brown</li>\r\n</ul>\r\n<p>Further details and information can be found from our <a href="uploads/docs/Signed_2009_accounts.pdf?phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1">Annual Report and Accounts</a>.</p>\r\n<p><a href="meetings-deadlines.php?phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1" class="red-btn">Meeting dates</a></p>');

-- --------------------------------------------------------

--
-- Table structure for table `areaswesupport`
--

CREATE TABLE IF NOT EXISTS `areaswesupport` (
  `id` tinyint(4) NOT NULL,
  `maincontent` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `areaswesupport`
--

INSERT INTO `areaswesupport` (`id`, `maincontent`) VALUES
(1, '<p>Visitors to our site are advised to read information provided in <a href="our-aims.php?phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1">Our Aims </a>in order to understand our Trustees particular areas of interest and focus.</p>\r\n<table class="area-we-support" style="width: 100%;" border="0" cellspacing="0" cellpadding="0">\r\n<thead> \r\n<tr>\r\n<td colspan="2">\r\n<h3><strong>Areas we support</strong> <img title="Tick" style="margin-left: 10px;" src="css/images/tick.png" alt="Tick" width="14" height="13" /></h3>\r\n</td>\r\n</tr>\r\n</thead> \r\n<tbody>\r\n<tr>\r\n<td>\r\n<p>Education</p>\r\n</td>\r\n<td>Elderly</td>\r\n</tr>\r\n<tr>\r\n<td>Health</td>\r\n<td>\r\n<p>Human Rights</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>Social &amp; Economic Inequality</td>\r\n<td>\r\n<p>Prisons</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table class="area-we-support" style="width: 100%;" border="0" cellspacing="0" cellpadding="0">\r\n<thead> \r\n<tr>\r\n<td colspan="2">\r\n<h3 class="red-bold"><strong>Areas we are unable to support</strong> <img title="Cross" style="margin-left: 10px;" src="css/images/cross.png" alt="Cross" width="16" height="15" /></h3>\r\n</td>\r\n</tr>\r\n</thead> \r\n<tbody>\r\n<tr>\r\n<td>Religious activities and purpose</td>\r\n<td>Political activities and purpose</td>\r\n</tr>\r\n<tr>\r\n<td>Animal welfare</td>\r\n<td>Medical research</td>\r\n</tr>\r\n<tr>\r\n<td>Individuals / Gap year students</td>\r\n<td>Holiday club providers</td>\r\n</tr>\r\n</tbody>\r\n</table>');

-- --------------------------------------------------------

--
-- Table structure for table `casestudies`
--

CREATE TABLE IF NOT EXISTS `casestudies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `category` tinyint(4) NOT NULL,
  `blurb` varchar(255) NOT NULL,
  `img_blurb` varchar(255) NOT NULL,
  `include_in_aws` tinyint(4) NOT NULL,
  `img_hero` varchar(255) NOT NULL,
  `img_hero_caption` varchar(255) NOT NULL,
  `img_1` varchar(255) NOT NULL,
  `img_1_caption` varchar(255) NOT NULL,
  `img_2` varchar(255) NOT NULL,
  `img_2_caption` varchar(255) NOT NULL,
  `img_logo` varchar(255) NOT NULL,
  `img_logo_caption` varchar(255) NOT NULL,
  `quote` varchar(255) NOT NULL,
  `maincontent` text NOT NULL,
  `sidecontent` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `casestudies`
--

INSERT INTO `casestudies` (`id`, `name`, `location`, `date`, `category`, `blurb`, `img_blurb`, `include_in_aws`, `img_hero`, `img_hero_caption`, `img_1`, `img_1_caption`, `img_2`, `img_2_caption`, `img_logo`, `img_logo_caption`, `quote`, `maincontent`, `sidecontent`) VALUES
(14, 'Hira Ghale', 'Bishaltar, North Nepal', '11 November, 2009', 2, 'Before the gravity ropeway was constructed, Hira had to pay a porter to carry his tomatoes down the mountain-side at a cost of 100 rupees per load.\r\n\r\nHe now uses the gravity rope bridge which has.....', 'ropeway.jpg', 1, 'hira-ghale.gif', 'Photo: Hira, watching a load transported on the ropeway.', 'ropeway.jpg', 'Photo: Hira watching a load transported on the ropeway.', 'ropeway2.jpg', 'Photo: Hira and the ropeway operator steady cage of produce at the bottom station.', 'pa_logo_175x77.gif', 'Practical Action', '"Life is good now. Not just for me but for many other farmers. I am saving time and money and can finally look forward to a more secure future for my family."', '<p>Hira is married with four children and lives high in the hills above the new gravity ropeway station in Bishaltar, Northern Nepal. He is particularly pleased with the difference that the ropeway is making because it was his community, in partnership with Practical Action, which constructed the ropeway in 2007.</p>\r\n<p>Hira grows tomatoes on his plot, which is three hours walk from the roadside where traders come to buy produce.&nbsp; Before the gravity ropeway was constructed, Hira had to pay a porter to carry his tomatoes down the mountain-side at a cost of 100 rupees per load.</p>\r\n<p>But Hira&rsquo;s tomatoes didn&rsquo;t used to command a very high value. He was also limited in the amount he could grow, not by the size of his plot, but because it just wasn&rsquo;t cost effective to transport the goods down the mountainside. Providing for his family was a constant challenge for Hira.&nbsp; <br />&nbsp;<br />Now, a much heavier load can be transported, using the ropeway, at a cost of just 15 rupees &ndash; seven times cheaper than hiring a porter. But it&rsquo;s not just money that Hira is saving; that three hour journey has been cut to just two minutes. The tomatoes arrive fresh and undamaged and fewer porters have to travel down <br />perilous pathways.&nbsp;</p>\r\n<p>Hira told me about the impact that the ropeway has been having on his community; "life is good now. Not just for me but for many other farmers. We couldn&rsquo;t imagine how much of a difference this simple ropeway would make; I am saving time and money and can finally look forward to a more secure future for my family". <br /><br />The whole community is benefiting from the gravity ropeway, being involved in the project from site selection through to construction and completion. They have now established a committee which represents the villagers using the ropeway, hired two staff members (one for the mountain top station and one for the roadside station) and mobilised over 50,000 rupees in savings (almost &pound;430).</p>\r\n<p><a class="red-arrow" href="http://www.practicalaction.org/" target="_blank">Visit the Practical Action&nbsp;website</a></p>\r\n<hr />\r\n<p><span class="small-text">Case study collected by <strong>Helen Marsh</strong> 2008</span></p>', '<p><strong><br /></strong></p>');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `id` tinyint(4) NOT NULL,
  `maincontent` text NOT NULL,
  `formemail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `maincontent`, `formemail`) VALUES
(1, '<p>We prefer contact by email. Please consider these before contacting us:</p>\r\n<p><a class="red-arrow" href="our-aims.php?phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1">Our Aims</a></p>\r\n<p><a class="red-arrow" href="meetings-deadlines.php?phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1">Meeting Dates</a></p>\r\n<p><a class="red-arrow" href="how-to-apply.php?phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1">Applications</a></p>\r\n<p><a class="red-arrow" href="how-to-apply.php?phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1">Follow up an application</a></p>\r\n<hr />\r\n<p>For more information about working with us, please fill in the fields to the right.</p>\r\n<p>Our offices are located at:</p>\r\n<p>The Innovation Centre<br />217 Portobello<br />Sheffield<br />S1 4DP</p>\r\n<p>Email: <a href="mailto:contactus@evancornishfoundation.org.uk">contactus@evancornishfoundation.org.uk</a></p>', 'jayne@evancornishfoundation.org.uk');

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE IF NOT EXISTS `dates` (
  `id` tinyint(4) NOT NULL,
  `maincontent` text NOT NULL,
  `meeting_day` varchar(255) NOT NULL,
  `meeting_month` varchar(255) NOT NULL,
  `application_day` varchar(255) NOT NULL,
  `application_month` varchar(255) NOT NULL,
  `future_meetings` text NOT NULL,
  `future_applications` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dates`
--

INSERT INTO `dates` (`id`, `maincontent`, `meeting_day`, `meeting_month`, `application_day`, `application_month`, `future_meetings`, `future_applications`) VALUES
(1, '<p><strong>Meeting dates</strong></p>\r\n<p>We meet six times a year and consider applications quarterly. The calendar below indicates the application deadline prior to the grant making meeting.</p>\r\n<p><strong>Application deadline</strong></p>\r\n<p>The fully completed application (hard copy and electronic versions) should be received by the application deadline.</p>\r\n<p>This deadline is final for consideration at that meeting. Any application that misses that meeting will be considered at the next meeting.</p>\r\n<p>All applications that fit Our Aims will be considered at the meeting.</p>\r\n<p>We aim to communicate the outcome within a week.</p>', '4', 'Oct', '7', 'Sep', '<p><strong>Future meeting dates: </strong></p>\r\n<ul>\r\n<li>Thursday 7 February 2013<span id="_mce_start" style="line-height: 0; display: none;"> </span></li>\r\n</ul>', '<p><strong>Future application deadlines:</strong></p>\r\n<ul>\r\n<li>Fri 3 January 2013 (for 7 February meeting)</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `docs`
--

CREATE TABLE IF NOT EXISTS `docs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doc` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `docs`
--

INSERT INTO `docs` (`id`, `doc`, `name`) VALUES
(3, 'Our_general_terms.pdf', 'General terms'),
(5, 'Application_form.pdf', 'Application form'),
(9, 'Progress_Report.doc', 'Progress report');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `maincontent` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `maincontent`) VALUES
(1, '<p>Before making any application for financial support please read the following General Terms and Conditions as your acceptance of these terms, together with any particular conditions which may apply to you/your organisation/project, will be required before we proceed to provide any support.</p>\r\n<ol>\r\n<li>Any support we provide will be offered in writing for your formal acceptance in writing and, as the applicant, you should not act upon any understanding that funding is granted until we have formally confirmed our grant to you in writing. Until that time, we will be under no obligation to make any contribution to you or your project.</li>\r\n<li>Any changes to the project will only be allowed with our written agreement. Notification of any change must be made to us as soon as possible, even if the grant is not yet drawn down.</li>\r\n<li>We give our consent for grants to be&nbsp;<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>a<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>cknowledge<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span><span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>d<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span> <span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>i<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>n<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span> <span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span><span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>C<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>h<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>a<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>r<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>i<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>t<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>y<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span> <span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span><span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>A<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>n<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>n<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>u<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>a<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>l<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span> <span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span><span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>R<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>e<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>p<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>o<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>r<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>t<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>s<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span>.<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span> <span id="_mce_start" style="line-height: 0; display: none;">ï»¿<span id="_mce_start" style="line-height: 0; display: none;">ï»¿<span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span></span></span><span id="_mce_start" style="line-height: 0; display: none;">ï»¿</span><span id="_mce_end" style="line-height: 0; display: none;">ï»¿</span>In addition, unless you specifically request of us otherwise, we may include reference to any support provided to you in our Annual Report and on our Website.&nbsp;&nbsp;&nbsp; &nbsp;</li>\r\n<li>A project report must be provided to us as soon as practical after the grant is used, detailing achievements AND failures, what has been learned and how this can be applied positively in your sector. Where a project extends beyond six months, interim/progress reports will be required on a half yearly basis. We require reports to be sent to us electronically.</li>\r\n<li>Accurate and comprehensive financial records related to our funding must be included in all reports. &nbsp;</li>\r\n<li>There needs to be an agreement to visit the organisation/project if requested by us. &nbsp;</li>\r\n<li>Should any part of the grant not be required and/or utilised within agreed timescales you must notify us. We reserve the right to request any such funds to be refunded to us and you agree to make repayment upon receipt of our request.</li>\r\n<li>We reserve the right to withhold a grant or part of a grant or require repayment if a) the work undertaken is not the work for which the grant was approved (unless we have been informed and approved the change); b) we find that any false information has supplied to us and c) your organisation becomes insolvent or goes in to administration, receivership or liquidation to the extent of any part of the grant which has not already been spent on its intended purpose.</li>\r\n<li>We reserve the right to share the information you provide to us with other relevant parties, for example The Charities Commission, where we consider this to be appropriate. </li>\r\n<li>For security purposes we will require documentary evidence of bank account details prior to releasing any award.</li>\r\n</ol>\r\n<p>We may, on occasions, add additional conditions specific to an individual grant where, in our opinion, the particular circumstances warrant these additions.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</p>'),
(2, '<p><strong>The Evan Cornish Foundation (ECF)</strong> is committed to safeguarding your privacy online. We use the information we collect about you to help us understand more about how our site is used and to be able to send you communications about ECF that may be of interest to you, either electronically or otherwise. The &lsquo;personally identifiable information&rsquo; is information that enables us to identify you, such as your email address, name, title, and address.<br /><br />Please read the following policy to understand how your personal information will be treated. This policy may change from time to time so please check back periodically. <br /><br /><strong>1. What personally identifiable information does ECF collect from me?</strong></p>\r\n<p>Like many websites, ECF uses cookies in order to provide you with a more personalised web service.<br />A cookie is a text-only string of information that we pass to your computer&rsquo;s hard disk through your web-browser so that the website can remember who you are. Cookies cannot be used by themselves to identify you.</p>\r\n<p>A cookie will typically contain the name of the domain from which the cookie has come, the &ldquo;lifetime&rdquo; of the cookie, and a value, usually a randomly generated unique number.&nbsp; For more information about cookies, please see www.allaboutcookies.org.</p>\r\n<p>We use session type cookies on our website: which are temporary cookies that remain in the cookies file of your browser until you leave the site; <br /><br />If you do not wish to receive cookies you can easily modify your web browser to refuse cookies, or to notify you when you receive a new cookie. However, you may not be able to use all the interactive features of our site if cookies are disabled, and so in order to enjoy the ECF site to the full, we recommend that you leave them switched on.</p>\r\n<p>Instructions on how to stop cookies being installed on your browser<br /><br /><strong>2. How does ECF use my information?</strong></p>\r\n<p>ECF uses the information we collect about you to help us with understanding more about how our site is used.<br /><br /><strong>3. Who is collecting your information?</strong></p>\r\n<p>When you are on the ECF website and are asked for personal information, you are sharing that information with ECF alone unless stated otherwise. <br /><br /><strong>4. With whom does ECF share your information?</strong></p>\r\n<p>As a general rule, ECF will not disclose any of your personally identifiable information, except when we have your permission or under special circumstances, such as when we believe in good faith that the law requires it<br /><br /><strong>5. What are my choices regarding, collection, use and distribution of my information?</strong></p>\r\n<p>ECF does not sell, rent or share user information with anyone. We may on occasion work with 3rd parties to contact our supporters about ECF, however the 3rd party would be bound by a confidentiality agreement that would prevent them from using this information for any other purpose.<br /><br /><strong>6. What is ECF&rsquo;s policy on allowing me to update, correct, or delete my personally identifiable information?</strong></p>\r\n<p>The accuracy of your individual identifying information is important to ECF. We are working on ways to make it easier for you to review and correct the information that ECF maintains about you. In the meantime, if you change email address or any of the other information we hold is inaccurate or out of date, please use the contact us form here.<br /><br /><strong>7. How does ECF protect my personal identifiable information?</strong></p>\r\n<p>ECF is committed to taking reasonable steps to protect the individual identifying information that you provide to us.<br /><br /><strong>9. What security precautions are in place to protect the loss, misuse, or alteration of my information?</strong></p>\r\n<p>When you give ECF personal information that information may be stored and processed we take steps to ensure that your information is treated securely.</p>\r\n<p>Unfortunately, no data transmission over the Internet can be guaranteed to be 100% secure. As a result, while we strive to protect your personal information, ECF cannot ensure or warrant the security of any information you transmit to us, and you do so at your own risk. Once we receive your transmission, we make our best effort to ensure its security on our systems.</p>'),
(3, '<!--StartFragment-->\r\n<div>\r\n<p>ECF is committed to providing a site accessible to everyone.</p>\r\n<ul>\r\n<li>All font sizes are relative, with the exception of graphical text, and text size can be increased or decreased by following these steps:<br /> \r\n<ul>\r\n<li>For Microsoft Internet Explorer and Mozilla Firefox: Use the&nbsp;<em>View</em>&nbsp;<em>&gt; Text Size</em>&nbsp;options in the browser menu;</li>\r\n<li>For Apple Safari: Use the&nbsp;<em>Safari &gt; Preferences &gt; Appearance</em>&nbsp;options in the browser menu.</li>\r\n</ul>\r\n</li>\r\n<li>All images have descriptive alternative text, with the exception of images that are used for aesthetic reasons only.</li>\r\n<li>Pages have been designed, and colours chosen, to be accessible to colour-blind users.</li>\r\n<li>A <a href="sitemap.php?phpMyAdmin=Vzai%2CtEgGA%2CRzL2mnEEolVRzD4a&phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1" target="_self">sitemap</a> is provided to assist with navigation.</li>\r\n</ul>\r\n<p><br />This site currently conforms to the single A standard, as stipulated by the Web Accessibility Initiative &lt;<a href="http://www.w3.org/WAI/">http://www.w3.org/WAI/</a>&gt; , and we are continually seeking to make improvements</p>\r\n</div>\r\n<p><span style="font-size: medium;"><br /></span></p>'),
(4, '<div class="row">\r\n<div class="col">\r\n<h2>Home</h2>\r\n<p>&nbsp;</p>\r\n<h2>Our aims</h2>\r\n</div>\r\n<div class="col">\r\n<h2>B</h2>\r\n</div>\r\n<div class="col">\r\n<h2>C</h2>\r\n</div>\r\n</div>');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `box1_title` varchar(255) NOT NULL,
  `box1_content` text NOT NULL,
  `box2_title` varchar(255) NOT NULL,
  `box2_content` text NOT NULL,
  `box3_title` varchar(255) NOT NULL,
  `box3_content` text NOT NULL,
  `box4_title` varchar(255) NOT NULL,
  `box4_content` text NOT NULL,
  `id` tinyint(4) NOT NULL,
  `slide1` varchar(255) NOT NULL,
  `slide2` varchar(255) NOT NULL,
  `slide3` varchar(255) NOT NULL,
  `slide4` varchar(255) NOT NULL,
  `slide1_active` tinyint(4) NOT NULL,
  `slide2_active` tinyint(4) NOT NULL,
  `slide3_active` tinyint(4) NOT NULL,
  `slide4_active` tinyint(4) NOT NULL,
  `box2_img` varchar(255) NOT NULL,
  `slide_btn_name` varchar(255) NOT NULL,
  `slide_btn_link` varchar(255) NOT NULL,
  `slide_btn_x` varchar(255) NOT NULL,
  `slide_btn_y` varchar(255) NOT NULL,
  `slide_btn_name2` varchar(255) NOT NULL,
  `slide_btn_link2` varchar(255) NOT NULL,
  `slide_btn_x2` varchar(255) NOT NULL,
  `slide_btn_y2` varchar(255) NOT NULL,
  `slide_btn_name3` varchar(255) NOT NULL,
  `slide_btn_link3` varchar(255) NOT NULL,
  `slide_btn_x3` varchar(255) NOT NULL,
  `slide_btn_y3` varchar(255) NOT NULL,
  `slide_btn_name4` varchar(255) NOT NULL,
  `slide_btn_link4` varchar(255) NOT NULL,
  `slide_btn_x4` varchar(255) NOT NULL,
  `slide_btn_y4` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`box1_title`, `box1_content`, `box2_title`, `box2_content`, `box3_title`, `box3_content`, `box4_title`, `box4_content`, `id`, `slide1`, `slide2`, `slide3`, `slide4`, `slide1_active`, `slide2_active`, `slide3_active`, `slide4_active`, `box2_img`, `slide_btn_name`, `slide_btn_link`, `slide_btn_x`, `slide_btn_y`, `slide_btn_name2`, `slide_btn_link2`, `slide_btn_x2`, `slide_btn_y2`, `slide_btn_name3`, `slide_btn_link3`, `slide_btn_x3`, `slide_btn_y3`, `slide_btn_name4`, `slide_btn_link4`, `slide_btn_x4`, `slide_btn_y4`) VALUES
('The Evan Cornish Foundation', '<p><strong>The Evan Cornish Foundation</strong> was created in memory of the late Evan Cornish, a successful businessman, who passed away in 2002. The trustees decided to utilise funds in his name for the benefit of charitable activities and to put something back into the local and wider community.</p>\r\n<p><a class="red-btn" href="about-us.php?phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1">Find out more about the foundation</a></p>', 'Featured case study', '<h3>Hira Ghale</h3>\r\n<p><strong></strong><strong>Bishaltar, North Nepal</strong> <br />11 November, 2009</p>\r\n<p>Before the gravity ropeway was constructed, Hira had to pay a porter to carry his tomatoes down the mountain-side at a cost of 100 rupees per load.</p>\r\n<p><a class="red-btn" href="case-study.php?id=14&amp;phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1" target="_self">Hira Ghale Case Study</a></p>', 'Find out if we can support your project', '<p>The Foundation has six central areas of work. Check that your project fits one or more of the Foundations Aims.</p>\r\n<ul>\r\n<li><a href="our-aim.php?id=3&amp;phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1" target="_self">Education</a> </li>\r\n<li><a href="our-aim.php?id=4&amp;phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1">Elderly</a></li>\r\n<li><a href="our-aim.php?id=6&amp;phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1">Health</a> </li>\r\n<li><a href="our-aim.php?id=5&amp;phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1">Human rights</a> </li>\r\n<li><a href="our-aim.php?id=2&amp;phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1">Social &amp; Economic Inequality</a></li>\r\n<li><a href="our-aim.php?id=7&amp;phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1">Prisons</a></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><a class="red-btn" href="areas-we-support.php?phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1">Find out if we can support your project</a></p>', 'How to apply', '<p>If your project fits with the <a href="our-aims.php?phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1" target="_self">Foundations Aim''s</a> and you have read and accepted our <a href="terms-and-conditions.php?phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1">Terms and Conditions</a>; please complete our Application form online.</p>\r\n<p>The Trustees will consider your application at one of their <a href="meetings-deadlines.php?phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1">quarterly meetings</a>. A visit or meeting may be requested.</p>\r\n<p><a class="red-btn" href="how-to-apply.php?phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1">How to apply</a></p>', 1, 'slide1.jpg', 'slide2.jpg', 'slide3.jpg', '', 1, 1, 1, 0, 'ropeway.jpg', 'Our aims', 'our-aims.php', '750', '247', 'Our aims', 'our-aims.php', '750', '247', 'Our aims', 'our-aims.php', '750', '247', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `howtoapply`
--

CREATE TABLE IF NOT EXISTS `howtoapply` (
  `id` tinyint(4) NOT NULL,
  `step1` text NOT NULL,
  `step2` text NOT NULL,
  `step3` text NOT NULL,
  `maincontent` text NOT NULL,
  `maintitle` varchar(255) NOT NULL,
  `smallprint` text NOT NULL,
  `topcontent` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `howtoapply`
--

INSERT INTO `howtoapply` (`id`, `step1`, `step2`, `step3`, `maincontent`, `maintitle`, `smallprint`, `topcontent`) VALUES
(1, '<h3>Step 1 - Learn about ECF</h3>\r\n<p>Before you begin please read and understand the following:</p>\r\n<ul>\r\n<li><a href="areas-we-support.php?phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1">Areas We Support</a> and Areas we do not support.</li>\r\n<li><a href="our-aims.php?phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1">Our Aims</a> </li>\r\n<li><a href="terms-and-conditions.php?phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1">General Terms and Conditions</a>.</li>\r\n</ul>', '<h3>Step 2 - Complete application form online</h3>\r\n<p>Please note that on submission of your application you are agreeing to abide by our <a href="terms-and-conditions.php?phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1">terms and conditions</a>.<br /><br /><a href="login.php?phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1" class="red-btn">Start application form online</a></p>', '<h3>Step 3 - Provide most recent Annual Accounts</h3>\r\n<p>Please email a copy of your most recent Annual Accounts if possible, alternatively hard copy documents may be posted to: The Charity Administrator, The Evan Cornish Foundation, The Innovation Centre, 217 Portobello, Sheffield S1 4DP.<br /><br /><a href="mailto:contactus@evancornishfoundation.org.uk" class="red-btn">EMAIL most recent Annual Accounts</a></p>', '<p>Downloadable documents. If you do not have a PDF reader you can <a href="http://get.adobe.com/uk/reader/" target="_blank">download Adobe Reader here</a></p>', 'Application documents', '<h3><span class="lightgreen">After you apply</span></h3>\r\n<p>Be prepared to meet with or talk to one of the Trustees prior to the final grant decision is made.<br /><br />Once your application and accounts have been submitted they will be considered at the next Trustees meeting. At this meeting the Trustees may request that a visit to your project or a meeting with your organisation may be desirable. <br /><br />Once a decision has been taken by the Trustees you will be notified in writing of the grant decision. This will be two weeks from the Trustees meeting or visit to the project which ever was the later. Once you have accepted our offer and returned a signed acceptance of our Terms and Conditions and details of your bank account the grant will be paid directly into your account. Our Trustees will expect a six month update on the project and a completed Progress Report at 12 months.ï»¿  (Note: The 12 month Progress Report must be completed using our proforma document, see ''Application Documents'' on this page).</p>\r\n<p>If you have any questions and queries please <a href="contact-us.php?phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1" target="_self">contact the Charity Administrator</a></p>', '<p><strong>Please follow the instructions below if you are applying to the Foundation for the first time or have not been successful in a previous application.</strong></p>\r\n<p>If you have received a grant from us before please ensure you clearly mark your application ''<span class="red-arrow"><strong>RE-APPLICATION''.</strong> </span></p>\r\n<p><span class="red-arrow">Our re-application policy is that you can re-apply for additional funding one year from the date of the last grant, as long as we have your 1 year progress report. We would also request a meeting or a visit to the project.</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `misc`
--

CREATE TABLE IF NOT EXISTS `misc` (
  `id` tinyint(4) NOT NULL,
  `helped_no` varchar(255) NOT NULL,
  `footer_msg` varchar(255) NOT NULL,
  `sidecontent` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `misc`
--

INSERT INTO `misc` (`id`, `helped_no`, `footer_msg`, `sidecontent`) VALUES
(1, '', '2009 The Evan Cornish Foundation is a registered charity no. 1112703', '<h3>Can we support<br />your project?</h3>\r\n<p><a class="red-arrow" href="areas-we-support.php?phpMyAdmin=Vzai%2CtEgGA%2CRzL2mnEEolVRzD4a&phpMyAdmin=fInDmWIilAWyiqxEIdOY4W6nMf1">Find out more</a></p>');

-- --------------------------------------------------------

--
-- Table structure for table `ouraims`
--

CREATE TABLE IF NOT EXISTS `ouraims` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `blurb` varchar(255) NOT NULL,
  `img_blurb` varchar(255) NOT NULL,
  `img_1` varchar(255) NOT NULL,
  `maincontent` text NOT NULL,
  `orderi` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `ouraims`
--

INSERT INTO `ouraims` (`id`, `name`, `blurb`, `img_blurb`, `img_1`, `maincontent`, `orderi`) VALUES
(3, 'Education', 'Improve peopleâ€™s lives through education.', 'education.jpg', 'education.jpg', '<p>Our priority is to work with children who cannot access mainstream education.</p>\r\n<p>The Foundation&rsquo;s intention is to complement rather than replace public funding. <br /><br />We support charities working nationally and internationally.</p>\r\n<p>NOTE: International applicants must have a registered UK office.</p>\r\n<p>&nbsp;</p>', 10),
(4, 'Elderly', 'Support for the wellbeing of elderly people, particularly in UK.', 'elderly.jpg', 'elderly.jpg', '<p>We aim to support the wellbeing of the older person through the provision of services with particular emphasis on maintaining independence and alleviation of isolation.</p>\r\n<p>We are looking to support charities which provide care to the elderly to improve their quality of life either through the provision of a service at home or through provision of a social network or meeting place.</p>\r\n<p>The Foundation&rsquo;s intention is to complement rather than replace public funding.</p>\r\n<p>We support charities working nationally and internationally.</p>\r\n<p>NOTE: International applicants must have a registered UK office.</p>', 20),
(5, 'Human rights', 'To reduce injustice by supporting, promoting and combating violations of Human Rights (as defined by the Universal Declaration of Human Rights).', 'human-rights.jpg', 'human-rights.jpg', '<p>We aim to fight injustice by combating violations of Human Rights (as defined by the Universal Declaration of Human Rights) and to support the victims of these violations and their dependants.</p>\r\n<p>We support charities working nationally and internationally.</p>\r\n<p>NOTE: International applicants must have a registered UK office.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 40),
(6, 'Health', 'To promote and provide access to basic health services. Our current healthcare emphasis is in the field of eyesight , eating disorders and women''s health.', 'health.jpg', 'health.jpg', '<p>We aim to support and promote the following areas: Mental Health / Women''s Health / Sight related disorders.</p>\r\n<p>The Foundation&rsquo;s intention is to complement rather than replace public funding.</p>\r\n<p>We support charities working nationally and internationally.</p>\r\n<p>NOTE: International applicants must have a registered UK office.</p>', 30),
(7, 'Prisons', 'To promote and ensure that the prison service is just, humane and effective.', 'penal-reform.jpg', 'penal-reform.jpg', '<p>We aim to promote and ensure that the prison service is just, humane and effective.  We wish to support the prisoners and their families during the term of imprisonment and on release.</p>\r\n<p>The Foundation''s intention is to complement, rather than replace public funding.</p>\r\n<p>We support charities working nationally and internationally.</p>\r\n<p>NOTE: International applicants must have a registered UK office.</p>', 60),
(2, 'Social & Economic Inequality', 'Alleviation of poverty both UK and overseas.', 'poverty.jpg', 'poverty.jpg', '<p>Our aim is to reach the most marginalised, to address social and economic inequality through empowerment of people and their community.</p>\r\n<p>The Foundation''s intention is to complement, rather than replace public funding.</p>\r\n<p>We support charities working nationally and internationally.</p>\r\n<p>NOTE: International applicants must have a registered UK office.</p>\r\n<p>&nbsp;</p>', 50);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` tinyint(4) NOT NULL,
  `psa` text NOT NULL,
  `psb` text NOT NULL,
  `psc` text NOT NULL,
  `psd` text NOT NULL,
  `pse` text NOT NULL,
  `psf` text NOT NULL,
  `psg` text NOT NULL,
  `psh` text NOT NULL,
  `psi` text NOT NULL,
  `psj` text NOT NULL,
  `psk` text NOT NULL,
  `psl` text NOT NULL,
  `psm` text NOT NULL,
  `psn` text NOT NULL,
  `pso` text NOT NULL,
  `psp` text NOT NULL,
  `psq` text NOT NULL,
  `psr` text NOT NULL,
  `pss` text NOT NULL,
  `pst` text NOT NULL,
  `psu` text NOT NULL,
  `psv` text NOT NULL,
  `psw` text NOT NULL,
  `psx` text NOT NULL,
  `psy` text NOT NULL,
  `psz` text NOT NULL,
  `psno` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `psa`, `psb`, `psc`, `psd`, `pse`, `psf`, `psg`, `psh`, `psi`, `psj`, `psk`, `psl`, `psm`, `psn`, `pso`, `psp`, `psq`, `psr`, `pss`, `pst`, `psu`, `psv`, `psw`, `psx`, `psy`, `psz`, `psno`) VALUES
(1, '<p><span style="font-size: small;"><span style="font-family: Calibri;">Access Space Network</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">ACE Africa</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Action for Blind People</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Action for Kids</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Action for ME</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Action Foundation</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Action Medical Research</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Afasic</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Afghan Connection</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Africa Equipment</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">African Initiatives</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Age Concern</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Age Concern Lancashire</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Age Concern Leicester</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Ahoy Centre</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Alstrom Syndrome</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Alzheimers Research Trust</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Alzheimers Society</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Amber</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Ambitious About Autism (Prev Tree House)</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Amnesty International</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">AMREF</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Angels International</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">The Arbour </span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Armonico Consort</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Army Benevolent Fund</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Article 25</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Artlink West Yorkshire</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Arts for Recovery in the Community</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">ASBAH</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Assist</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Assist (Sheffield)</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Asthma UK</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Asylum Aid</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Autism Initiatives</span></span></p>', '<p><span style="font-size: small;"><span style="font-family: Calibri;">BAAF</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Bag Books</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Basic Needs UK Trust</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Bath Institute of Medical Engineering</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Bati About Kidz</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Beat (Beat Eating Disorders)</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Bedfordshire &amp; Northants MS Therapy</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Beds &amp; Northants MS Centre</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Birmingham Royal Ballet</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Bobath Children''s Therapy Centre</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Bolton Lads and Girls club</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">BookPower</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Bradford &amp; Airedale Mental Health Advocacy Group</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Brainwave</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Breast Cancer Care</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Brit. Institute for Brain Injured Children</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">British Refugee Council</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">British Wireless for the Blind Fund</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">BSES Expeditions</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">BTCV</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Build A School</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Build Africa</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Butterwick Hospice Care</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Buttle UK</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">BWBF</span></span></p>', '<p><span style="font-size: small;"><span style="font-family: Calibri;">C.A.R.E. East Midlands</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Cardboard Citizens</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Cardiac Risk in the Young (CRY)</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Care International</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Casa Alianza</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Casa Alianza  Nicaragua Outreach</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Casa Alianza Street Children Arts Prog.</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Castle Advice</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">CASY</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Cavendish Cancer Care</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">CCIN</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Cecily''s Fund</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">The Cellar Space</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Centre for Alternative Technology</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Cerebral Palsy Sport</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Changing Faces</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Cherry Tree Nursery</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Child Brain Injury Trust (CBIT)</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">ChildHope UK</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Childreach International</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Children in Crisis</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Children in Touch</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Children&rsquo;s Country Holidays</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Children''s Discovery Centre</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">The Children''s Trust, Tadworth </span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Chilterns MS Centre</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Christ Church Armley Project</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Christian Aid</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Church Housing Trust</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">CINI</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Circle </span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Citizens Advice Trafford</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">City Gate Community Projects</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">City of Sanctuary</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Civil Liberties</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">The Civil Liberties</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">CLIC Sargent</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Computer Aid International</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Concern Worldwide</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">The Connection at St Martin-in-the-Fields</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Conversation Club Sheffield</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Coram</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Cornwall Disability Arts Group</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">CP Sport</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Cruse Bereavement Care</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Culture + Conflict</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Cyan International</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Cystic Fibrosis</span></span></p>', '<p><span style="font-size: small;"><span style="font-family: Calibri;">Dalit Solidarity Network</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Dame Hannah Rogers Trust</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Darjeeling Children&rsquo;s Trust</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Deafblind UK</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Deafchild Worldwide</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Deafness Research UK</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Dees Abled</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Deki</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Depaul UK</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Derbyshire Housing Aid</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Derwentside/Willow Burn</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Diabetes Research</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Disability Challengers</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Dogs for the Disabled</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Doncaster Rape &amp; Sexual Counselling</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Dystonia Society</span></span></p>', '<p><span style="font-size: small;"><span style="font-family: Calibri;">ECPAT UK</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Eden Project</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Edinburgh Young Carers</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Education for the Children</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Emmaus</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Encounters</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Endeavour Training</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Enterprise Education Trust</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Erskine</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">European Disaster Volunteers</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Everychild</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Excellent Development</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Extra Care Charitable Trust</span></span></p>', '<p><span style="font-size: small;"><span style="font-family: Calibri;">Fair Trials</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">The Family Haven</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Family Refugee Support Programme</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Farm Africa</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Fauna &amp; Flora International</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Fenland Community Transport</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Field Studies Council</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Fight for Sight</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Find Your Feet</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Food Matters</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Freedom From Torture</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Friends of the Elderly</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Frontline Partnerships</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Fydell House Centre</span></span></p>', '<p><span style="font-size: small;"><span style="font-family: Calibri;">The Gatton Trust Gorilla Org</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Great Ormond Street</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Green Tara Trust</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Guy''s Gift</span></span></p>', '<p><span style="font-size: small;"><span style="font-family: Calibri;">Happy Days Childrens Charity</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Hartlepool &amp; District Hospice</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">The Haven </span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Help the Aged</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Heron Corn Mill</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Hill Wheeler Pre School Kenya</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Hope Foundation</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Hope &amp; Homes for Children</span></span></p>', '<p><span style="font-size: small;"><span style="font-family: Calibri;">Ice &amp; Fire</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Ilderton Motor Project</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Impact</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Inquest</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Interact</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">InterAct Reading Service</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Interact Worldwide</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Intercare Medical Aid for Africa</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">International Childcare Trust (ICT)</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">International Children''s Trust</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">International Refugee Trust</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Ipswich Disabled Advice Bureau</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">The Island Trust</span></span></p>', '<p><span style="font-size: small;"><span style="font-family: Calibri;">Jennifer Trust</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Jessie''s Fund</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">John Lyall</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Joseph Patrick Trust</span></span></p>', '<p><span style="font-size: small;"><span style="font-family: Calibri;">Kaloko Trust</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Karuna Trust</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Kelvin Media</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Kent Association for the Blind</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Kickstart Sheffield</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">King''s World Trust for Children</span></span></p>', '<p><span style="font-size: small;"><span style="font-family: Calibri;">Lawrence''s Roundabout Well Appeal</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">LEAP</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Leicestershire Carers</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Leonard Cheshire Disability</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">LEPRA</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Lincoln &amp; Lindsay Blind Society</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Lincoln Mind</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Lippy People CIC</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Listening Books</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Living Earth</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Lotus Flower Trust</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Love Is All We Need</span></span></p>', '<p><span style="font-size: small;"><span style="font-family: Calibri;">Maggie''s Cancer Care Centres</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">MAP  (Medical Aid for Palestinians)</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Medicins Sans Frontieres</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Mencap</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Mercy Ships</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">MERU</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">MG Association</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Microloan Foundation</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">MNDA</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Mobilise</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Mondo Challenge</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Motivation</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">MS Society (Woodlands Respite Care)</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Myasthenia Gravis</span></span></p>', '<p><span style="font-size: small;"><span style="font-family: Calibri;">National Student Drama Festival</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">The New Bridge Foundation </span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">N-Gage</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Noah&rsquo;s Ark Trust</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">NOEL</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">The Norman Laud Association </span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Notting Hill Churches Homeless Concern (NHCHC)</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">NSDF</span></span></p>', '<p><span style="font-size: small;"><span style="font-family: Calibri;">Oakley Rural Day Care Centre</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">One In A Million</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">One25 Naomi House</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Operation New World</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Opportunity International</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">ORBIS </span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Orskov Foundation</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Ovarian Cancer Action</span></span></p>', '<p><span style="font-size: small;"><span style="font-family: Calibri;">PBC Society</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">PCC of St Mary''s Horncastle</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Peace Direct</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">PEAT</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Peregrin Way Centre</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Photovoice</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Plan UK</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Power International</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Practical Action</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">The Prince''s Trust</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Prisoners Advice Service</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Prisoners of Conscience</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Project Harar</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Promoting Equality in African Schools</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">PSP</span></span></p>', '<p><span style="font-size: small;"><span style="font-family: Calibri;">Quarriers</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Queen Alexandra Hospital Home</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Quest for Change</span></span></p>', '<p><span style="font-size: small;"><span style="font-family: Calibri;">Radar</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">RAFT</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Raw Music and Media</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Reading Association for the Blind</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Roshni Sheffield Asian Women''s Resource Centre</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Refugee and Migrant Justice</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Regenerate RISE</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Renewable World</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Retrak</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Riders for Health</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Rotherham United Community Sports</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Royal Academy of Arts</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Royal Blind Society</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Rural Solar Lighting</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Rutland House School for Parents</span></span></p>', '<p><span style="font-size: small;"><span style="font-family: Calibri;">Sabre Charitable Trust</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Safeline Warwick</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Scottish Chamber Orchestra</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Scratch</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Sea Sanctuary</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Second Chance</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Second World War Experience</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Sense International</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Sheffield Alcohol Support Services</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Sheffield Amnesty International Group</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Sheffield Mencap</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Sheffield Mencap &amp; Gateway</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Sheffield Together Women&rsquo;s Project</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Sheffield Women''s Counselling &amp; Therapy Service</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Shelter</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Sick Children&rsquo;s Trust</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Side by Side</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Sightsavers</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Sightsavers International</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">SignHealth</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Skillforce</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Snaith Community &amp; Sports Assoc.</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">SOS Children''s Villages</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Sound Seekers</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">South Yorks Victim Offender Mediation Service (REMEDI)</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Speak Up Self Advocacy Group</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Spinal Injuries Association</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Spiti Projects</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">St Basil&rsquo;s</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">St Cuthburt&rsquo;s</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">St Giles Trust</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">St John of Jerusalem Eye Hospital </span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">St Mungo</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">St Theresa''s House</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">St Vincent&rsquo;s</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Starfish</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Starfish Greathearts</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Starlight Children''s Foundation</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Stocksbridge Community Care Group</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Survival International</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">SVP Furniture Store  (St Vincent de Paul)</span></span></p>', '<p><span style="font-size: small;"><span style="font-family: Calibri;">TAMBA</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Target TB</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Thames Hospice Care</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Theodora Children''s Trust</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">THET</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Tools for Self Reliance</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Tourettes Action</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Tourism Concern</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Traidcraft</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">TRAX</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Tree Aid</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">The TreeHouse Trust</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Trees for Cities</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">TWIN</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Two Moors Festival</span></span></p>', '<p>U can do it</p>\r\n<p>Unicef</p>\r\n<p>Unique (Rare Chromosome Disorder Support Group)</p>\r\n<p>Upper Room</p>', '<p>Village Water</p>\r\n<p>Virtual Development</p>\r\n<p>VSO</p>', '<p><span style="font-size: small;"><span style="font-family: Calibri;">Well Child</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">West Yorkshire Scout Council</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Whirlow Hall Farm Trust</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Womankind Worldwide</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">World in Need</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">World Medical Fund</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">World Orthopaedic Concern</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">Worldwide Volunteering</span></span></p>', '<html />', '<p>Y care</p>\r\n<p>Youth Net</p>\r\n<p>YPTE</p>', '<html />', '<p><span style="font-size: small;"><span style="font-family: Calibri;">3D Youth Services</span></span></p>\r\n<p><span style="font-size: small;"><span style="font-family: Calibri;">4 Sight</span></span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `password` varchar(40) NOT NULL,
  `status` int(2) DEFAULT '1',
  `ip` varchar(45) NOT NULL DEFAULT '000.000.000',
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `creation_timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `a1_name_organisation` varchar(128) DEFAULT NULL,
  `a1_name_applicant` varchar(128) DEFAULT NULL,
  `a1_type_organisation` varchar(50) DEFAULT NULL,
  `a1_registered_number` varchar(128) DEFAULT NULL,
  `a1_organisation_established` varchar(128) DEFAULT NULL,
  `a1_website_address` varchar(128) DEFAULT NULL,
  `a2_key_person` varchar(128) DEFAULT NULL,
  `a2_address` varchar(256) DEFAULT NULL,
  `a2_telephone` varchar(128) DEFAULT NULL,
  `a2_email` varchar(128) NOT NULL,
  `a3_organisation_activities` text,
  `b1_project_title` varchar(256) DEFAULT NULL,
  `b2_project_details` text,
  `b3_work_date_month` varchar(32) DEFAULT NULL,
  `b3_work_date_year` int(4) DEFAULT NULL,
  `b4_work_place` varchar(256) DEFAULT NULL,
  `b5_budget_details1` text,
  `b5_budget_details2` text,
  `b5_budget_details3` text,
  `b6_people_benefit` text,
  `b7_success_measured` text,
  `c1_number_people1` varchar(128) DEFAULT NULL,
  `c1_number_people2` varchar(128) DEFAULT NULL,
  `c1_number_people3` varchar(128) DEFAULT NULL,
  `c1_number_people4` varchar(128) DEFAULT NULL,
  `c2_trustees_governors` text,
  `c3_senior_management` text,
  `c4_key_people` text,
  `d1_total_income` varchar(128) DEFAULT NULL,
  `d2_unrestricted_reserves` varchar(256) DEFAULT NULL,
  `d3_financial_position` text,
  `d4_fund_raising` varchar(128) DEFAULT NULL,
  `d5_income_raised` varchar(128) DEFAULT NULL,
  `d6_significant_donors` varchar(256) DEFAULT NULL,
  `e1_previous_application` varchar(4) DEFAULT NULL,
  `e1_successful` varchar(4) DEFAULT NULL,
  `e1_list_amounts` varchar(256) DEFAULT NULL,
  `e2_reference_name` varchar(128) DEFAULT NULL,
  `e2_reference_address` varchar(256) DEFAULT NULL,
  `e2_reference_phone` varchar(128) DEFAULT NULL,
  `e2_reference_email` varchar(128) DEFAULT NULL,
  `e2_reference_relationship` varchar(128) DEFAULT NULL,
  `e3_why_ecf` text,
  `e4_what_difference` text,
  `terms_agreement` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `status`, `ip`, `last_login`, `creation_timestamp`, `a1_name_organisation`, `a1_name_applicant`, `a1_type_organisation`, `a1_registered_number`, `a1_organisation_established`, `a1_website_address`, `a2_key_person`, `a2_address`, `a2_telephone`, `a2_email`, `a3_organisation_activities`, `b1_project_title`, `b2_project_details`, `b3_work_date_month`, `b3_work_date_year`, `b4_work_place`, `b5_budget_details1`, `b5_budget_details2`, `b5_budget_details3`, `b6_people_benefit`, `b7_success_measured`, `c1_number_people1`, `c1_number_people2`, `c1_number_people3`, `c1_number_people4`, `c2_trustees_governors`, `c3_senior_management`, `c4_key_people`, `d1_total_income`, `d2_unrestricted_reserves`, `d3_financial_position`, `d4_fund_raising`, `d5_income_raised`, `d6_significant_donors`, `e1_previous_application`, `e1_successful`, `e1_list_amounts`, `e2_reference_name`, `e2_reference_address`, `e2_reference_phone`, `e2_reference_email`, `e2_reference_relationship`, `e3_why_ecf`, `e4_what_difference`, `terms_agreement`) VALUES
(1, 'a05783f07a0c24763903298e936e83be', 1, '127.0.0.1', '2012-05-24 12:35:35', '0000-00-00 00:00:00', 'Helloooo', 'Hello', 'Charity', 'Hello', 'Hello', 'Hello', 'Hello', 'Hello street\r\nlondon\r\nusd2 22\r\nUK', 'Hello', 'natalijat@gmail.com', 'test\r\ntest\r\nNice house\r\nksdjfhhdfjksgdhdfgkdkshkfhfdskh\r\nksdfkgsdkfghs', 'test', 'test', 'February', 2014, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '$65000', '$100000000000', 'test', 'testing 50', 'test', 'test', 'No', 'No', 'test', 'test', 'test', 'test', 'test@test.com', 'test', 'test', 'test', ''),
(12, '36b58eebe17f2a2af8d627a8cac27a31', 1, '127.0.0.1', '2012-05-18 12:58:47', '2012-05-18 12:58:47', NULL, 'test test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'natalija@mumbl.co.uk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, '70c84407b5cbe32e8cc07f7a0a6790ea', 1, '127.0.0.1', '2012-05-23 09:44:35', '2012-05-23 09:44:35', '', '', '', '', '', '', '', '', '', 'test@test.com', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

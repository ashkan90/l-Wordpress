-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 Eyl 2018, 15:43:41
-- Sunucu sürümü: 10.1.28-MariaDB
-- PHP Sürümü: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `d-blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ads`
--

CREATE TABLE `ads` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `src` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `widget_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Uncategorized', 'uncategorized', '', NULL, NULL),
(2, 'Web Development', 'web-development', 'Spuu2NeJASvuSPiV9Sn0egQy5', NULL, NULL),
(3, 'Data Science', 'data-science', '7HJbdNWc7hZIQ1m8EUx7bNl38', NULL, NULL),
(4, 'General', 'general', 'mcEuCb8HqZjCNxlbTgQSsqqIc', NULL, NULL),
(5, 'Art', 'art', 'FfGGdtYb6gc11IG572GhXFXz5', NULL, NULL),
(7, 'Gadgets', 'gadgets', 'From festivals in Florida to touring Dracula’s digs in Romania', '2018-09-02 10:57:11', '2018-09-02 10:57:11'),
(8, 'Architecture', 'architecture', 'From festivals in Florida to touring Dracula’s digs in Romania', '2018-09-02 10:57:25', '2018-09-02 10:57:25'),
(9, 'New look 2018', 'new-look-2018', 'From festivals in Florida to touring Dracula’s digs in Romania', '2018-09-02 10:57:35', '2018-09-02 10:57:35'),
(10, 'Reviews', 'reviews', 'From festivals in Florida to touring Dracula’s digs in Romania', '2018-09-02 10:57:43', '2018-09-02 10:57:43'),
(11, 'Mobile and Phones', 'mobile-and-phones', 'From festivals in Florida to touring Dracula’s digs in Romania', '2018-09-02 10:57:51', '2018-09-02 10:57:51'),
(12, 'Recipes', 'recipes', 'From festivals in Florida to touring Dracula’s digs in Romania', '2018-09-02 10:57:58', '2018-09-02 10:57:58'),
(13, 'Decorating', 'decorating', 'From festivals in Florida to touring Dracula’s digs in Romania', '2018-09-02 10:58:06', '2018-09-02 10:58:06'),
(14, 'Interiors', 'interiors', 'From festivals in Florida to touring Dracula’s digs in Romania', '2018-09-02 10:58:16', '2018-09-02 10:58:16'),
(15, 'Street fashion', 'street-fashion', 'From festivals in Florida to touring Dracula’s digs in Romania', '2018-09-02 10:58:21', '2018-09-02 10:58:21');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_25_050420_create_visitortracker_visits_table', 1),
(4, '2018_08_28_161758_create_posts_table', 1),
(5, '2018_08_28_161842_create_categories_table', 1),
(6, '2018_08_28_161937_create_tags_table', 1),
(7, '2018_08_29_134436_create_profiles_table', 1),
(8, '2018_08_29_134702_create_settings_table', 1),
(9, '2018_08_29_144258_create_post_tag_table', 1),
(10, '2018_08_29_144439_create_post_category_table', 1),
(11, '2018_08_31_111608_create_post_meta_table', 1),
(12, '2018_09_02_211831_create_widgets_table', 1),
(13, '2018_09_02_212244_create_ads_table', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_count` int(11) NOT NULL DEFAULT '0',
  `comment_count` int(11) NOT NULL DEFAULT '0',
  `post_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `post_status`, `comment_status`, `content`, `featured`, `visit_count`, `comment_count`, `post_link`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Is C++ Dying ?', 'is-c-dying', 'publish', 'open', '<p class=\"ui_qtext_para\" style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: q_serif, Georgia, Times, &quot;Times New Roman&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, Meiryo, serif;\">No. C++ is being used for more and more all the time, especially since C++11.</p><p class=\"ui_qtext_para\" style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: q_serif, Georgia, Times, &quot;Times New Roman&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, Meiryo, serif;\">But, the computer industry as a whole is expanding even faster. In the past, you had to be pretty passionate about computers to be able to keep a job in the industry. Now, there is so much demand that a whole new wave of new people are getting involved, and for them, C++ is too difficult to learn. So you have a large segment of the industry that is using things like Java and Javascript.</p><p class=\"ui_qtext_para\" style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: q_serif, Georgia, Times, &quot;Times New Roman&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, Meiryo, serif;\">So, there will always be a need for C++, but now there is also room for jobs that can be done with less training. Relative to this new influx, C++ must seem to be outdated and shrinking, especially to those new people. But in absolute terms, C++ use is growing at a great pace.</p><p class=\"ui_qtext_para\" style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: q_serif, Georgia, Times, &quot;Times New Roman&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, Meiryo, serif;\">There are a few languages that can compete with C++, like Rust and D, but they are not quite there yet, and the evolution of C++ has greatly accelerated in the past few years. They are now talking about releasing new standards every two years now.</p>', '', 0, 0, '', 1, '2018-09-03 08:32:01', '2018-09-02 19:34:31', '2018-09-03 08:32:01'),
(2, 'Last Judgement', '', 'publish', 'open', '<p><strong><em>The Last Judgement</em></strong> is the name of the <strong>fresco</strong> located on the wall behind the altar of the <strong>Sistine Chapel</strong> in <strong>Rome</strong>. It was designed and realized by the Renaissance master <strong><a title=\"Michelangelo Buonarroti\" href=\"https://www.florenceinferno.com/michelangelo-buonarroti/\">Michelangelo Buonarroti</a></strong> between <strong>1533</strong> and <strong>1541</strong>.</p>\n                <p>It depicts the Second Coming of Christ as well as the final and eternal Judgement by God on all humanity according to the Christian religion. Altogether there are over <strong>300 figures</strong>, with nearly all the males and angels originally shown as nudes.</p>\n                <p>Michelangelo’s masterpiece was <strong>inspired</strong> by Dante’s <strong><em>Divine Comedy</em></strong> and is mentioned by Dan Brown in his <em><a title=\"Inferno by Dan Brown\" href=\"https://www.florenceinferno.com/dan-brown-novel/\">Inferno</a></em>.<span id=\"more-1978\"></span></p>\n                <p><img class=\"alignnone size-large wp-image-5311 retinized\" title=\"The Last Judgement by Alun Salt\" src=\"https://www.florenceinferno.com/wp-content/uploads/2014/01/The-Last-Judgement-by-Alun-Salt-912x1024.jpg\" alt=\"The Last Judgement by Alun Salt\" width=\"912\" height=\"1024\" srcset=\"https://www.florenceinferno.com/wp-content/uploads/2014/01/The-Last-Judgement-by-Alun-Salt.jpg 912w, https://www.florenceinferno.com/wp-content/uploads/2014/01/The-Last-Judgement-by-Alun-Salt-267x300.jpg 267w, https://www.florenceinferno.com/wp-content/uploads/2014/01/The-Last-Judgement-by-Alun-Salt-768x862.jpg 768w\" sizes=\"(max-width: 912px) 100vw, 912px\"></p>\n                <p>It is the second largest fresco by Michelangelo located in the Sistine Chapel, next to the frescoe on the ceiling illustrating episodes taken from the <em>Book of Genesis</em>. Between the two frescoes is an interval of almost twenty-five years, and one can witness between the two a change in Michelagelo’s artistic vision.</p>\n                <h2>Before starting</h2>\n                <p>The realization and the location of the <em>The Last Judgement</em> came about as the result of the specific wishes of the <strong>first patron</strong>, <strong>Pope Clemente VII</strong>. Unfortunately, he would only see the compositional model: the actual painting of the fresco took place under his <strong>successor</strong>, <strong>Pope Paolo III Farnese</strong>, beginning in <strong>1536</strong> after a <strong>long</strong> and troublesome <strong>preparatory phase</strong>.</p>\n                <p>This phase consisted of the creation of the <strong>chapel’s wall</strong>, which involved the placing of a thick layer of bricks at the top and of a thinner layer of bricks at the bottom to <strong>create</strong> an <strong>inclined surface</strong>. The sloping of the wall was deemed necessary to improve visibility and to avoid the deposit of dust.</p>\n                <p>During this phase, <strong>three frescoes</strong> that were <strong>painted on</strong> upper the <strong>wall</strong> by the Italian painter known as <strong>Perugino</strong> were <strong>destroyed</strong>, as were two lunettes painted by Michelangelo himself over twenty years earlier. The result was the creation of space to paint one great piece of architecture.</p>\n                <p>Michelangelo worked alone for the entirety of the project, with the exception of minor assistance for the manual preparation of colors.</p>\n                <h2>Choice of subject</h2>\n                <p>While the Last Judgment was a <strong>traditional subject</strong> for large church frescoes, it was unusual to place a fresco at the east end, over the <strong>altar</strong>. The traditional positioning was on the west wall, over the main doors, at the back of the church, so that each member of the congregation was reminded of its possible fate on their way out of church. It might be either painted on the interior or in a sculpted tympanum on the exterior. However, a number of late medieval panel paintings, mostly altarpieces, were based on the subject with similar compositions, although adapted to a horizontal picture space. These include the <em>Beaune Altarpiece</em> by Rogier van der Weyden, and works by artists such as Fra Angelico, Hans Memling, and Hieronymus Bosch. Many aspects of Michelangelo’s composition reflect the well-established traditional Western depiction, but with a fresh and <strong>original approach</strong>.</p>\n                <p>Most traditional versions had a figure of Christ depicted in <strong>majesty</strong> in about the same position as Michelangelo’s, although even larger than his, with a greater disproportion in scale to the other figures. As here, compositions contained large numbers of figures, divided between angels and saints around Christ at the top, with the souls being judged down below. Typically there is a strong contrast between the <strong>ordered ranks</strong> of figures in the top part, and the <strong>chaotic</strong> and frenzied activity below, especially on the right side that leads to Hell. The flow of souls usually began at the bottom (viewer’s) left, as here, with resurrected souls rising from their graves and moving towards judgement. Some pass judgement and continue upwards or to the left, to join the company in heaven, while others pass over to the right and then downwards towards Hell in the bottom right corner (compositions had difficulty incorporating Purgatory visually).<br>\n                The damned souls may be shown naked, as a mark of their humiliation as devils carry them off, and sometimes the newly resurrected souls too, but angels and those in Heaven are fully dressed, their clothing a main clue to the identity of groups and individuals.</p>\n                <h2>Description</h2>\n                <p>The painting is noted for its <strong>radical departure from traditional depictions</strong> of the Last Judgment. In particular, the overall structure replaces the traditional pattern of horizontal layers depicting heaven, earth, and hell with a <strong>single large space</strong>. The figures are grouped into <strong>individual plastic formations</strong> and are placed in <strong>isolation</strong> characteristic of eternity’s terrible <strong>emptiness</strong>.</p>\n                <p>At the centre of the work is a depiction of <strong>Christ</strong>, captured in the moment preceding the pronoucement of the verdict of the Last Judgement. To Christ’ right is his mother, Vergine Maria (the <strong>Virgin Mary</strong>), who turns her head in a gesture of resignation:in fact she can no longer intervene in the decision, but only await the result of the Judgement.</p>\n                <p>Surrounding Christ in a slow rotary movement are figures, identified as the <strong>saints</strong> and <strong>God’s elect</strong>. Most notable are San Pietro (<strong>Saint Peter</strong>) holding the Keys of Heaven San Lorenzo (<strong>St Laurence</strong>) with the gridiron, San Bartolomeo (<strong>St Bartholomew</strong>) with his own skin, which is usually recognized as a self-portrait of Michelangelo, <strong>St Catherine of Alexandria</strong> with the cogwheel and <strong>St Sebastian</strong> kneeling holding the arrows. Many others, even some of the larger saints, are difficult to identify.<br>\n                Several of the main saints appear to be showing Christ their <strong>attributes</strong>, the evidence of their <strong>martyrdom</strong>. This used to be interpreted as the saints calling for the damnation of those who had not served the cause of Christ, but other interpretations have become more common, including that the saints are themselves not certain of their own fate, and try at the last moment to remind Christ of their sufferings.</p>\n                <p>In the centre of the lower section are the <strong>angels</strong> of the Apocalypse, who are awaking the dead with the sound of long trumpets. On the left, the risen recover their bodies as they ascend towards <strong>heaven</strong>; and on the right, angels and <strong>demons</strong> fight over making the damned fall down to <strong><a title=\"The Map of Hell\" href=\"https://www.florenceinferno.com/the-map-of-hell/\">hell</a></strong>.</p>\n                <p>Below this detail is the representation of Hell, against the backdrop of a red sky in flames, and of <strong>Charon</strong>, leading the damned into hell where they are greeted by <strong>Minos</strong>, whose body is wrapped in the coils of the serpent. This part clearly references the <a title=\"Dante Alighieri’s Inferno\" href=\"https://www.florenceinferno.com/dante-hell/\">Hell</a> of Dante’s <em>Divine Comedy</em>.</p>\n                <p>In the centre above Charon is a group of angels on clouds, seven of which are blowing trumpets (as in the <strong>Book of Revelation</strong>), with others holding books that record the names of the Saved and Damned. To their right is a larger figure of a <strong>soul</strong> who has just realized that he is damned, and appears paralyzed with horror. Two devils are pulling him downwards.</p>\n                <p><strong>Michelangelo</strong> is able to convey the full force of terror at the supreme moment, when fate comes swiftly and where there is no time left or opportunity available to fix one’s mistakes. This instant <strong>represented</strong> by Michelangelo ends up having a universal connotation, as if it symbolizes the <strong>moment</strong> when <strong>life ends</strong> and <strong>no hope remains</strong>.</p>\n                <p>The entire painting is dominated by the <strong>human figure</strong>, almost always presented fully <strong>naked</strong>. The bodies are represented with great expressiveness and power.</p>\n                <h2>Reception and later changes</h2>\n                <p>The reception of the painting was mixed from the start, garnering much praise but also <strong>criticism</strong> on religious and artistic grounds. Both the amount of <strong>nudity</strong> and the muscular <strong>style of the bodies</strong> have been one area of contention, with the overall composition being another.<br>\n                The Last Judgment became controversial as soon as it was seen, with disputes arising between critics in the Catholic Counter-Reformation, and supporters of the genius of the artist and the style of the painting. Michelangelo was accused of being insensitive to proper <strong>decorum</strong> in respect of nudity and other aspects of the work, and of pursuing artistic effect over following the scriptural description of the event.</p>\n                <p>The mixing of figures from <strong>pagan mythology</strong> with depictions of <strong>Christian subject</strong> matter was also objected to, as were the figures of Charon and Minos, wingless angels, and the very classicized depiction of Christ. Beardless Christs had in fact only finally disappeared from Christian art some four centuries earlier, but Michelangelo’s figure was unmistakably Apollonian. Further objections related to failures to follow the scriptural references.<br>\n                The angels blowing trumpets are all in one group, whereas in the Book of Revelation they are sent to “the four corners of the earth.” Christ is not seated on a throne, contrary to Scripture. Such draperies as Michelangelo painted are often shown as blown by wind, but it was claimed that all weather would cease on the Day of Judgement. The resurrected souls are in mixed condition, with some appearing as skeletons while most are depicted with their flesh intact.</p>\n                <p>The controversies continued for years leading into <strong>1564</strong>, after the death of Michelangelo, with a decision by the Congregation of the <strong>Council of Trent</strong> to have some of the figures of the Judgement that were considered “<strong>obscene</strong>” covered.<br>\n                The task of painting the covering drapery, the so-called “<em>braghe</em>” (pants), was given to <strong>Daniele da Volterra</strong>, since then known as the “<em>braghettone</em>.” Daniele’s “braghe” were only the first and in fact others were added in the following centuries.</p>\n                <p>Despite this censorship, the painting has not lost its strong expressive power. In fact, today, after the recent restoration, it still appears as one of the most <strong>intense paintings in art history</strong>.</p>\n                <p>This post was originally published in January 13, 2014 and has been updated and enriched on December 15, 2017.</p>\n                <p>Picture by <a href=\"https://www.flickr.com/photos/alun/188739956/in/photolist-hFkPb-eqr43n-ernhNo-hFkPc-69LKmz-hJtan-6UCw4-atXxSw-9d4dNM-21vgAas-5DwkR-5nFJi3-9d7aJ9-HTbiqQ-5f5DPV-ce1kbm-SeXbvh-6UCw2-9d4cQx-9d7pYW-9d7vp5-9d7ubC-jd28ho-9d7ngd-9d7hoy-9d4iyB-9d4eZx-9d79Lf-NfZDGw-dLP4BB-9d7oem-D2tCvN-21zVWQV-ZsUub7-ZezM1M-219a35J-218tUyZ-D2orbU-21t6zD3-21uZY5A-D5T3Q5-217UUYU-21i3Vjw-2173CkC-21zW2kr-21nTFCM-215K5PS-215BsvU-6pnorw-dLP4ki/\" target=\"”_blank”\">The Last Judgement by Alun Salt</a> <a href=\"https://creativecommons.org/licenses/by-sa/2.0/\" target=\"”_blank”\">CC BY-SA 2.0</a></p>', 'assets/upload/post/Last Judgement.jpg', 0, 0, '', 1, NULL, '2018-09-02 19:34:31', '2018-09-02 19:34:31'),
(17, 'The Most Anticipated Hotel Openings in Strasbourg this Summer', 'the-most-anticipated-hotel-openings-in-strasbourg-this-summer', 'publish', 'open', '<p class=\"post_p\">Maecenas vitae sem varius, imperdiet nisi a, tristique nisi. Sed scelerisque suscipit leo cursus accumsan. Donec vel turpis quam. Mauris non nisl nec nunc gravida ullamcorper id vestibulum magna. Donec non velit finibus, laoreet arcu nec, facilisis augue. Aliquam sed purus id erat accumsan congue. Mauris semper ullamcorper nibh non pellentesque. Aenean euismod purus sit amet quam vehicula ornare.</p>\r\n<figure>\r\n								<img src=\"{{ asset(\'avision/images/post_image.jpg\') }}\" alt=\"\">\r\n								<figcaption>Lorem Ipsum Dolor Sit Amet</figcaption>\r\n							</figure>\r\n<div class=\"post_quote\">\r\n								<p class=\"post_p\">Aliquam auctor lacus a dapibus pulvinar. Morbi in elit erat. Quisque et augue nec tortor blandit hendrerit eget sit amet sapien. Curabitur at tincidunt metus, quis porta ex. Duis lacinia metus vel eros cursus pretium eget.</p>\r\n								<div class=\"post_quote_source\">Robert Morgan</div>\r\n							</div>', 'assets/upload/post/1535896797f1.jpg', 0, 0, '', 1, NULL, '2018-09-02 10:59:57', '2018-09-02 11:26:07'),
(18, 'Tokyo Fashion Week Is Making Itself Great Again', 'tokyo-fashion-week-is-making-itself-great-again', 'publish', 'open', '<p class=\"post_p\">Maecenas vitae sem varius, imperdiet nisi a, tristique nisi. Sed scelerisque suscipit leo cursus accumsan. Donec vel turpis quam. Mauris non nisl nec nunc gravida ullamcorper id vestibulum magna. Donec non velit finibus, laoreet arcu nec, facilisis augue. Aliquam sed purus id erat accumsan congue. Mauris semper ullamcorper nibh non pellentesque. Aenean euismod purus sit amet quam vehicula ornare.</p>\r\n<figure>\r\n								<img src=\"{{ asset(\'avision/images/post_image.jpg\') }}\" alt=\"\">\r\n								<figcaption>Lorem Ipsum Dolor Sit Amet</figcaption>\r\n							</figure>\r\n<div class=\"post_quote\">\r\n								<p class=\"post_p\">Aliquam auctor lacus a dapibus pulvinar. Morbi in elit erat. Quisque et augue nec tortor blandit hendrerit eget sit amet sapien. Curabitur at tincidunt metus, quis porta ex. Duis lacinia metus vel eros cursus pretium eget.</p>\r\n								<div class=\"post_quote_source\">Robert Morgan</div>\r\n							</div>', 'assets/upload/post/1535896863f2.jpg', 0, 0, '', 1, NULL, '2018-09-02 11:01:03', '2018-09-02 11:01:03'),
(19, 'Interior Design: Hexagon is the New Circle in 2018', 'interior-design-hexagon-is-the-new-circle-in-2018', 'publish', 'open', '<p class=\"post_p\">Maecenas vitae sem varius, imperdiet nisi a, tristique nisi. Sed scelerisque suscipit leo cursus accumsan. Donec vel turpis quam. Mauris non nisl nec nunc gravida ullamcorper id vestibulum magna. Donec non velit finibus, laoreet arcu nec, facilisis augue. Aliquam sed purus id erat accumsan congue. Mauris semper ullamcorper nibh non pellentesque. Aenean euismod purus sit amet quam vehicula ornare.</p>\r\n<figure>\r\n								<img src=\"{{ asset(\'avision/images/post_image.jpg\') }}\" alt=\"\">\r\n								<figcaption>Lorem Ipsum Dolor Sit Amet</figcaption>\r\n							</figure>\r\n<div class=\"post_quote\">\r\n								<p class=\"post_p\">Aliquam auctor lacus a dapibus pulvinar. Morbi in elit erat. Quisque et augue nec tortor blandit hendrerit eget sit amet sapien. Curabitur at tincidunt metus, quis porta ex. Duis lacinia metus vel eros cursus pretium eget.</p>\r\n								<div class=\"post_quote_source\">Robert Morgan</div>\r\n							</div>', 'assets/upload/post/1535896931f3.jpg', 0, 0, '', 1, NULL, '2018-09-02 11:02:11', '2018-09-02 11:02:11'),
(20, 'Five reasons why in-form Leicester City will finish the job and stay up', 'five-reasons-why-in-form-leicester-city-will-finish-the-job-and-stay-up', 'publish', 'open', '<p class=\"post_p\">Maecenas vitae sem varius, imperdiet nisi a, tristique nisi. Sed scelerisque suscipit leo cursus accumsan. Donec vel turpis quam. Mauris non nisl nec nunc gravida ullamcorper id vestibulum magna. Donec non velit finibus, laoreet arcu nec, facilisis augue. Aliquam sed purus id erat accumsan congue. Mauris semper ullamcorper nibh non pellentesque. Aenean euismod purus sit amet quam vehicula ornare.</p>\r\n<figure>\r\n								<img src=\"{{ asset(\'avision/images/post_image.jpg\') }}\" alt=\"\">\r\n								<figcaption>Lorem Ipsum Dolor Sit Amet</figcaption>\r\n							</figure>\r\n<div class=\"post_quote\">\r\n								<p class=\"post_p\">Aliquam auctor lacus a dapibus pulvinar. Morbi in elit erat. Quisque et augue nec tortor blandit hendrerit eget sit amet sapien. Curabitur at tincidunt metus, quis porta ex. Duis lacinia metus vel eros cursus pretium eget.</p>\r\n								<div class=\"post_quote_source\">Robert Morgan</div>\r\n							</div>', 'assets/upload/post/1535897013f4.jpg', 0, 0, '', 1, NULL, '2018-09-02 11:03:33', '2018-09-02 11:03:33'),
(21, 'Samantha Friedman is an interior designer based in Bethesda', 'samantha-friedman-is-an-interior-designer-based-in-bethesda', 'publish', 'open', '<p class=\"post_p\">Maecenas vitae sem varius, imperdiet nisi a, tristique nisi. Sed scelerisque suscipit leo cursus accumsan. Donec vel turpis quam. Mauris non nisl nec nunc gravida ullamcorper id vestibulum magna. Donec non velit finibus, laoreet arcu nec, facilisis augue. Aliquam sed purus id erat accumsan congue. Mauris semper ullamcorper nibh non pellentesque. Aenean euismod purus sit amet quam vehicula ornare.</p>\r\n<figure>\r\n								<img src=\"{{ asset(\'avision/images/post_image.jpg\') }}\" alt=\"\">\r\n								<figcaption>Lorem Ipsum Dolor Sit Amet</figcaption>\r\n							</figure>\r\n<div class=\"post_quote\">\r\n								<p class=\"post_p\">Aliquam auctor lacus a dapibus pulvinar. Morbi in elit erat. Quisque et augue nec tortor blandit hendrerit eget sit amet sapien. Curabitur at tincidunt metus, quis porta ex. Duis lacinia metus vel eros cursus pretium eget.</p>\r\n								<div class=\"post_quote_source\">Robert Morgan</div>\r\n							</div>', 'assets/upload/post/1535897103f5.jpg', 0, 0, '', 1, NULL, '2018-09-02 11:05:03', '2018-09-02 11:05:03'),
(22, 'Man agrees to complete $5,000 Hereford Inlet Lighthouse painting job', 'man-agrees-to-complete-5000-hereford-inlet-lighthouse-painting-job', 'publish', 'open', '<p class=\"post_p\">Maecenas vitae sem varius, imperdiet nisi a, tristique nisi. Sed scelerisque suscipit leo cursus accumsan. Donec vel turpis quam. Mauris non nisl nec nunc gravida ullamcorper id vestibulum magna. Donec non velit finibus, laoreet arcu nec, facilisis augue. Aliquam sed purus id erat accumsan congue. Mauris semper ullamcorper nibh non pellentesque. Aenean euismod purus sit amet quam vehicula ornare.</p>\r\n<figure>\r\n								<img src=\"{{ asset(\'avision/images/post_image.jpg\') }}\" alt=\"\">\r\n								<figcaption>Lorem Ipsum Dolor Sit Amet</figcaption>\r\n							</figure>\r\n<div class=\"post_quote\">\r\n								<p class=\"post_p\">Aliquam auctor lacus a dapibus pulvinar. Morbi in elit erat. Quisque et augue nec tortor blandit hendrerit eget sit amet sapien. Curabitur at tincidunt metus, quis porta ex. Duis lacinia metus vel eros cursus pretium eget.</p>\r\n								<div class=\"post_quote_source\">Robert Morgan</div>\r\n							</div>', 'assets/upload/post/1535897159f6.jpg', 0, 0, '', 1, NULL, '2018-09-02 11:05:59', '2018-09-02 11:05:59'),
(23, 'Creative decorating with houseplants, from floor to ceiling', 'creative-decorating-with-houseplants-from-floor-to-ceiling', 'publish', 'open', '<p class=\"post_p\">Maecenas vitae sem varius, imperdiet nisi a, tristique nisi. Sed scelerisque suscipit leo cursus accumsan. Donec vel turpis quam. Mauris non nisl nec nunc gravida ullamcorper id vestibulum magna. Donec non velit finibus, laoreet arcu nec, facilisis augue. Aliquam sed purus id erat accumsan congue. Mauris semper ullamcorper nibh non pellentesque. Aenean euismod purus sit amet quam vehicula ornare.</p>\r\n<figure>\r\n								<img src=\"{{ asset(\'avision/images/post_image.jpg\') }}\" alt=\"\">\r\n								<figcaption>Lorem Ipsum Dolor Sit Amet</figcaption>\r\n							</figure>\r\n<div class=\"post_quote\">\r\n								<p class=\"post_p\">Aliquam auctor lacus a dapibus pulvinar. Morbi in elit erat. Quisque et augue nec tortor blandit hendrerit eget sit amet sapien. Curabitur at tincidunt metus, quis porta ex. Duis lacinia metus vel eros cursus pretium eget.</p>\r\n								<div class=\"post_quote_source\">Robert Morgan</div>\r\n							</div>', 'assets/upload/post/1535897206f7.jpg', 0, 0, '', 1, NULL, '2018-09-02 11:06:46', '2018-09-02 11:06:46'),
(24, 'Traveling Tends to Magnify All Human Emotions', 'traveling-tends-to-magnify-all-human-emotions', 'publish', 'open', '<p class=\"post_p\">Maecenas vitae sem varius, imperdiet nisi a, tristique nisi. Sed scelerisque suscipit leo cursus accumsan. Donec vel turpis quam. Mauris non nisl nec nunc gravida ullamcorper id vestibulum magna. Donec non velit finibus, laoreet arcu nec, facilisis augue. Aliquam sed purus id erat accumsan congue. Mauris semper ullamcorper nibh non pellentesque. Aenean euismod purus sit amet quam vehicula ornare.</p>\r\n<figure>\r\n								<img src=\"{{ asset(\'avision/images/post_image.jpg\') }}\" alt=\"\">\r\n								<figcaption>Lorem Ipsum Dolor Sit Amet</figcaption>\r\n							</figure>\r\n<div class=\"post_quote\">\r\n								<p class=\"post_p\">Aliquam auctor lacus a dapibus pulvinar. Morbi in elit erat. Quisque et augue nec tortor blandit hendrerit eget sit amet sapien. Curabitur at tincidunt metus, quis porta ex. Duis lacinia metus vel eros cursus pretium eget.</p>\r\n								<div class=\"post_quote_source\">Robert Morgan</div>\r\n							</div>', 'assets/upload/post/1535897284f8.jpg', 0, 0, '', 1, NULL, '2018-09-02 11:08:04', '2018-09-02 11:08:04'),
(25, 'Microsoft Subsumes Open Tech Unit Back Inside Mothership', 'microsoft-subsumes-open-tech-unit-back-inside-mothership', 'publish', 'open', '<p class=\"post_p\">Maecenas vitae sem varius, imperdiet nisi a, tristique nisi. Sed scelerisque suscipit leo cursus accumsan. Donec vel turpis quam. Mauris non nisl nec nunc gravida ullamcorper id vestibulum magna. Donec non velit finibus, laoreet arcu nec, facilisis augue. Aliquam sed purus id erat accumsan congue. Mauris semper ullamcorper nibh non pellentesque. Aenean euismod purus sit amet quam vehicula ornare.</p>\r\n<figure>\r\n								<img src=\"{{ asset(\'avision/images/post_image.jpg\') }}\" alt=\"\">\r\n								<figcaption>Lorem Ipsum Dolor Sit Amet</figcaption>\r\n							</figure>\r\n<div class=\"post_quote\">\r\n								<p class=\"post_p\">Aliquam auctor lacus a dapibus pulvinar. Morbi in elit erat. Quisque et augue nec tortor blandit hendrerit eget sit amet sapien. Curabitur at tincidunt metus, quis porta ex. Duis lacinia metus vel eros cursus pretium eget.</p>\r\n								<div class=\"post_quote_source\">Robert Morgan</div>\r\n							</div>', 'assets/upload/post/1535897352f9.jpg', 0, 0, '', 1, NULL, '2018-09-02 11:09:12', '2018-09-02 11:09:12'),
(26, 'Haunts of the Heart: Landscapes of Lynn Zimmerman', 'haunts-of-the-heart-landscapes-of-lynn-zimmerman', 'publish', 'open', '<p class=\"post_p\">Maecenas vitae sem varius, imperdiet nisi a, tristique nisi. Sed scelerisque suscipit leo cursus accumsan. Donec vel turpis quam. Mauris non nisl nec nunc gravida ullamcorper id vestibulum magna. Donec non velit finibus, laoreet arcu nec, facilisis augue. Aliquam sed purus id erat accumsan congue. Mauris semper ullamcorper nibh non pellentesque. Aenean euismod purus sit amet quam vehicula ornare.</p>\r\n<figure>\r\n								<img src=\"{{ asset(\'avision/images/post_image.jpg\') }}\" alt=\"\">\r\n								<figcaption>Lorem Ipsum Dolor Sit Amet</figcaption>\r\n							</figure>\r\n<div class=\"post_quote\">\r\n								<p class=\"post_p\">Aliquam auctor lacus a dapibus pulvinar. Morbi in elit erat. Quisque et augue nec tortor blandit hendrerit eget sit amet sapien. Curabitur at tincidunt metus, quis porta ex. Duis lacinia metus vel eros cursus pretium eget.</p>\r\n								<div class=\"post_quote_source\">Robert Morgan</div>\r\n							</div>', 'assets/upload/post/1535897417f10.jpg', 0, 0, '', 1, NULL, '2018-09-02 11:10:17', '2018-09-02 11:10:17'),
(27, 'Dream Homes: North Penthouse Listed For $1.7 Million', 'dream-homes-north-penthouse-listed-for-17-million', 'publish', 'open', '<p class=\"post_p\">Maecenas vitae sem varius, imperdiet nisi a, tristique nisi. Sed scelerisque suscipit leo cursus accumsan. Donec vel turpis quam. Mauris non nisl nec nunc gravida ullamcorper id vestibulum magna. Donec non velit finibus, laoreet arcu nec, facilisis augue. Aliquam sed purus id erat accumsan congue. Mauris semper ullamcorper nibh non pellentesque. Aenean euismod purus sit amet quam vehicula ornare.</p>\r\n<figure>\r\n								<img src=\"{{ asset(\'avision/images/post_image.jpg\') }}\" alt=\"\">\r\n								<figcaption>Lorem Ipsum Dolor Sit Amet</figcaption>\r\n							</figure>\r\n<div class=\"post_quote\">\r\n								<p class=\"post_p\">Aliquam auctor lacus a dapibus pulvinar. Morbi in elit erat. Quisque et augue nec tortor blandit hendrerit eget sit amet sapien. Curabitur at tincidunt metus, quis porta ex. Duis lacinia metus vel eros cursus pretium eget.</p>\r\n								<div class=\"post_quote_source\">Robert Morgan</div>\r\n							</div>', 'assets/upload/post/1535897502f2.jpg', 0, 0, '', 1, NULL, '2018-09-02 11:11:42', '2018-09-02 11:11:42'),
(28, 'Amazon’s Apple Watch killer will be free and sell you everything', 'amazons-apple-watch-killer-will-be-free-and-sell-you-everything', 'publish', 'open', '<p class=\"post_p\">Maecenas vitae sem varius, imperdiet nisi a, tristique nisi. Sed scelerisque suscipit leo cursus accumsan. Donec vel turpis quam. Mauris non nisl nec nunc gravida ullamcorper id vestibulum magna. Donec non velit finibus, laoreet arcu nec, facilisis augue. Aliquam sed purus id erat accumsan congue. Mauris semper ullamcorper nibh non pellentesque. Aenean euismod purus sit amet quam vehicula ornare.</p>\r\n<figure>\r\n								<img src=\"{{ asset(\'avision/images/post_image.jpg\') }}\" alt=\"\">\r\n								<figcaption>Lorem Ipsum Dolor Sit Amet</figcaption>\r\n							</figure>\r\n<div class=\"post_quote\">\r\n								<p class=\"post_p\">Aliquam auctor lacus a dapibus pulvinar. Morbi in elit erat. Quisque et augue nec tortor blandit hendrerit eget sit amet sapien. Curabitur at tincidunt metus, quis porta ex. Duis lacinia metus vel eros cursus pretium eget.</p>\r\n								<div class=\"post_quote_source\">Robert Morgan</div>\r\n							</div>', 'assets/upload/post/1535897540f11.jpg', 0, 0, '', 1, NULL, '2018-09-02 11:12:20', '2018-09-02 11:12:20'),
(29, 'Canon XC10 4K Digital Camcorder Is Out', 'canon-xc10-4k-digital-camcorder-is-out', 'publish', 'open', '<p class=\"post_p\">Maecenas vitae sem varius, imperdiet nisi a, tristique nisi. Sed scelerisque suscipit leo cursus accumsan. Donec vel turpis quam. Mauris non nisl nec nunc gravida ullamcorper id vestibulum magna. Donec non velit finibus, laoreet arcu nec, facilisis augue. Aliquam sed purus id erat accumsan congue. Mauris semper ullamcorper nibh non pellentesque. Aenean euismod purus sit amet quam vehicula ornare.</p>\r\n<figure>\r\n								<img src=\"{{ asset(\'avision/images/post_image.jpg\') }}\" alt=\"\">\r\n								<figcaption>Lorem Ipsum Dolor Sit Amet</figcaption>\r\n							</figure>\r\n<div class=\"post_quote\">\r\n								<p class=\"post_p\">Aliquam auctor lacus a dapibus pulvinar. Morbi in elit erat. Quisque et augue nec tortor blandit hendrerit eget sit amet sapien. Curabitur at tincidunt metus, quis porta ex. Duis lacinia metus vel eros cursus pretium eget.</p>\r\n								<div class=\"post_quote_source\">Robert Morgan</div>\r\n							</div>', 'assets/upload/post/1535897588f12.jpg', 0, 0, '', 1, NULL, '2018-09-02 11:13:08', '2018-09-02 11:13:08');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `post_category`
--

CREATE TABLE `post_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `post_category`
--

INSERT INTO `post_category` (`id`, `post_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 4, NULL, NULL),
(39, 17, 2, NULL, NULL),
(40, 18, 14, NULL, NULL),
(41, 19, 15, NULL, NULL),
(42, 20, 3, NULL, NULL),
(43, 21, 9, NULL, NULL),
(44, 22, 1, NULL, NULL),
(45, 23, 9, NULL, NULL),
(46, 24, 14, NULL, NULL),
(47, 25, 5, NULL, NULL),
(48, 26, 1, NULL, NULL),
(49, 27, 10, NULL, NULL),
(50, 28, 10, NULL, NULL),
(51, 29, 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `post_meta`
--

CREATE TABLE `post_meta` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `page_template` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 2, 4, NULL, NULL),
(4, 2, 5, NULL, NULL),
(5, 2, 6, NULL, NULL),
(6, 2, 7, NULL, NULL),
(7, 2, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobbies` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `profiles`
--

INSERT INTO `profiles` (`id`, `avatar`, `about`, `hobbies`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '', ' about ADMIN ', 'some hobbies about you', 1, NULL, NULL),
(2, '', ' about USER ', 'some hobbies about you', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_slogan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privacy_page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `site_slogan`, `site_email`, `site_language`, `home_page`, `post_page`, `privacy_page`, `created_at`, `updated_at`) VALUES
(1, 'Blog', 'Share what think you, read what they think', 'admin@blog.com', 'Turkish', 'deafult', 'default', 'privacy_post_link', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Julia', 'julia', NULL, NULL),
(2, 'C++', 'c', NULL, NULL),
(3, 'Wordpress 4.8', 'wordpress-48', NULL, NULL),
(4, 'Last Judgement', 'last-judgement', NULL, NULL),
(5, 'Michelangelo', 'michelangelo', NULL, NULL),
(6, 'Renaissance', 'renaissance', NULL, NULL),
(7, 'Art', 'art', NULL, NULL),
(8, 'Art of History', 'art-of-history', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_site` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `surname`, `contact_site`, `email`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'xv0uEjtf8M', 'admin', 'surname', 'eataman.com', 'admin@gmail.com', '$2y$10$NlTFE0/PE92r4QGoW/pCSugtoFOy9B7lbQaX8UUdiOaFOzcFKCU/C', '1', NULL, '2018-09-02 19:34:30', '2018-09-02 19:34:30'),
(2, 'GfyPIzOv7X', 'user', 'surname', NULL, 'user@gmail.com', '$2y$10$izOCo5RNSTApWx98Km5l/OROP1267.jMQH1IUPPPNveuoMBduythy', '0', NULL, '2018-09-02 19:34:30', '2018-09-02 19:34:30');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `visitortracker_visits`
--

CREATE TABLE `visitortracker_visits` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_ajax` tinyint(1) NOT NULL DEFAULT '0',
  `url` text COLLATE utf8mb4_unicode_ci,
  `referer` text COLLATE utf8mb4_unicode_ci,
  `user_agent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_desktop` tinyint(1) NOT NULL DEFAULT '0',
  `is_mobile` tinyint(1) NOT NULL DEFAULT '0',
  `is_bot` tinyint(1) NOT NULL DEFAULT '0',
  `bot` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os_family` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `os` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `browser_family` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `browser` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `is_login_attempt` tinyint(1) NOT NULL DEFAULT '0',
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `country_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `lat` double DEFAULT NULL,
  `long` double DEFAULT NULL,
  `browser_language_family` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `browser_language` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `widgets`
--

CREATE TABLE `widgets` (
  `id` int(10) UNSIGNED NOT NULL,
  `ad_1` int(11) NOT NULL,
  `ad_2` int(11) NOT NULL,
  `future_events` int(11) NOT NULL,
  `newest_video` int(11) NOT NULL,
  `top_stories` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `post_meta`
--
ALTER TABLE `post_meta`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Tablo için indeksler `visitortracker_visits`
--
ALTER TABLE `visitortracker_visits`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `widgets`
--
ALTER TABLE `widgets`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Tablo için AUTO_INCREMENT değeri `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Tablo için AUTO_INCREMENT değeri `post_meta`
--
ALTER TABLE `post_meta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Tablo için AUTO_INCREMENT değeri `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `visitortracker_visits`
--
ALTER TABLE `visitortracker_visits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `widgets`
--
ALTER TABLE `widgets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

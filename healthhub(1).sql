-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 07 2024 г., 05:17
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `healthhub`
--

-- --------------------------------------------------------

--
-- Структура таблицы `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint UNSIGNED NOT NULL,
  `id_user` int NOT NULL,
  `id_doctor` int NOT NULL,
  `id_category` int NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `result` int NOT NULL DEFAULT '0',
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Нет',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `appointments`
--

INSERT INTO `appointments` (`id`, `id_user`, `id_doctor`, `id_category`, `date`, `time`, `result`, `attachment`, `description`, `created_at`, `updated_at`) VALUES
(351, 161, 181, 1, '1972-10-13', '11:36:57', 1, 'Velit dolor et in in ratione perferendis praesentium ut. Et vel debitis et in natus dignissimos officia temporibus. Necessitatibus atque quaerat odio reprehenderit recusandae labore officiis quidem.', 'Tenetur ipsa delectus corrupti maiores. Possimus quibusdam ab vitae dolorem non aut nihil. Aut aperiam et sapiente. Sunt et necessitatibus eos. Ut libero id nemo ut culpa delectus similique.', '2023-08-31 19:55:18', '2024-06-06 19:16:13'),
(352, 169, 181, 2, '2019-01-22', '21:46:55', 0, 'Rerum nihil asperiores qui sint totam ut quis ducimus. Repudiandae perspiciatis eum ipsum.', 'Sapiente voluptatibus reprehenderit similique quis ipsam dolore. Eum vitae pariatur corrupti incidunt consequatur. Praesentium at voluptatem provident.', '2023-10-14 14:05:13', '2024-06-06 19:16:13'),
(353, 161, 179, 3, '2012-09-09', '00:39:52', 0, 'Modi mollitia facilis et non iure. Est nemo magni ut dolorem. Ex veniam velit rem voluptas quas non. Ullam laborum unde saepe quo.', 'Harum pariatur et corporis officia ut quas. Illo voluptatem sed fugit magnam est similique voluptatibus. Et in dolores vero molestias non vel.', '2023-12-14 01:41:41', '2024-06-06 19:16:13'),
(354, 168, 180, 2, '1991-02-27', '12:09:59', 2, 'Corporis est eum harum. Explicabo ipsum sunt vero eligendi. Animi debitis dolorem illo iste ut qui enim. Blanditiis quia atque velit officia. Ad quidem sed vel.', 'Nostrum incidunt vero quibusdam facere consectetur. Ut est deleniti placeat ea. Laudantium quod molestiae sunt quia laboriosam. Sint a ut velit temporibus officiis totam.', '2024-06-04 14:16:01', '2024-06-06 19:16:13'),
(355, 159, 179, 1, '2016-07-07', '22:52:10', 1, 'Ad similique aut ut atque. Aut perferendis qui dolorum. Est iusto laborum aut magni qui incidunt. Id autem quisquam quia. Voluptas repellat illum eos.', 'Qui in autem perferendis. Enim est dolorum nulla. Aut modi necessitatibus similique.', '2023-10-09 03:01:28', '2024-06-06 19:16:13'),
(356, 178, 179, 4, '2022-06-18', '22:44:15', 0, 'Numquam assumenda quas sed. Possimus vel laboriosam velit aliquid hic. Quas quidem necessitatibus sequi similique.', 'Dolore voluptatem doloremque architecto ut delectus sit. Aliquam assumenda recusandae nam doloremque suscipit sequi.', '2023-12-08 07:11:10', '2024-06-06 19:16:13'),
(357, 184, 182, 5, '1971-10-28', '17:34:53', 1, 'Ipsum optio vero officia nam. Quod ut unde commodi. Dolore enim velit dolor autem quae quidem vero in. Dolores veritatis iste labore at id sint et.', 'Enim quibusdam ipsa dolorem. A magni deserunt odit culpa exercitationem consectetur quisquam. Accusamus possimus impedit dolore enim aut officia itaque. Corrupti hic accusamus iusto voluptas.', '2023-10-07 13:40:16', '2024-06-06 19:16:13'),
(358, 157, 181, 4, '2009-05-22', '15:14:13', 2, 'Libero libero minus consectetur. Sequi id sed fugit mollitia voluptatem omnis. Ut ab ad ex quod vel ea.', 'Illo earum vel autem aut voluptatum ut voluptatibus. Deleniti et ea veritatis exercitationem. Accusantium quae sint perspiciatis vel modi.', '2023-10-28 23:03:28', '2024-06-06 19:16:13'),
(359, 171, 182, 1, '1990-07-06', '15:36:31', 2, 'Est voluptatem debitis culpa adipisci pariatur minima consectetur. Ut ut soluta molestiae doloremque magnam expedita.', 'Sunt doloremque illo corrupti velit exercitationem natus aut. Modi sapiente suscipit reprehenderit ratione eos. Aut consequuntur alias laudantium minus qui quia. Minima tempora autem iusto fuga.', '2023-09-01 02:31:53', '2024-06-06 19:16:13'),
(360, 157, 184, 5, '2004-06-09', '17:40:51', 1, 'Magnam consectetur ratione voluptate perferendis amet eius et beatae. Illo et ea nemo praesentium ipsam. Aperiam itaque consequatur repellat fuga.', 'Officia eum assumenda omnis doloremque non sunt. Impedit quo maiores quia. Ut rerum necessitatibus quos saepe illum. Ea molestiae corporis quidem autem magnam ipsum aut.', '2023-06-15 02:12:24', '2024-06-06 19:16:13'),
(361, 184, 184, 4, '1971-09-13', '03:14:14', 2, '1717719587.png', '123', '2023-06-08 00:17:52', '2024-06-06 21:19:47'),
(362, 157, 179, 1, '1990-11-07', '02:52:51', 0, 'Et illo quas id culpa omnis. Quia veritatis asperiores quisquam nemo quaerat. Iure quos placeat iusto enim repudiandae et.', 'Mollitia omnis vero illo quo. Aut praesentium inventore molestias doloribus et et.', '2024-04-24 13:50:27', '2024-06-06 19:16:13'),
(363, 156, 180, 5, '2008-12-20', '02:27:37', 0, 'Eum et dignissimos laborum. Et voluptates nihil rem dolorem. Sint excepturi inventore iure perspiciatis iure.', 'Sapiente consequatur ut aspernatur qui deleniti. Placeat repellat aut qui reiciendis voluptate tempora. In sit et deleniti est sunt minima ea ea.', '2023-07-05 11:26:56', '2024-06-06 19:16:13'),
(364, 156, 180, 3, '1977-09-24', '14:06:48', 0, 'Voluptatum unde voluptate et quae quis voluptatibus. Dolorem voluptates cum esse non et.', 'Ut quis ipsum quia explicabo numquam. Libero est voluptatibus incidunt deleniti a placeat fugiat voluptatem. Recusandae autem rem non asperiores natus tempore eum. Sunt consequuntur est enim.', '2023-06-28 19:09:01', '2024-06-06 19:16:13'),
(365, 167, 181, 5, '2024-07-05', '08:30:00', 1, 'Dignissimos laudantium itaque itaque magni quibusdam recusandae et. Corporis consequuntur similique in odio. Earum quia velit quaerat.', 'Et saepe praesentium ab ut sed laboriosam. Et dolores et voluptatem sunt. Ratione saepe saepe nesciunt corporis voluptatum. Maiores delectus doloremque beatae.', '2024-03-30 06:23:46', '2024-06-06 19:16:13'),
(366, 184, 180, 5, '2024-06-07', '09:00:00', 0, '0', 'Нет', '2024-06-07 01:44:54', '2024-06-07 01:44:54'),
(367, 184, 180, 5, '2024-06-07', '09:00:00', 0, '0', 'Нет', '2024-06-07 01:47:41', '2024-06-07 01:47:41'),
(368, 184, 182, 1, '2024-06-07', '08:30:00', 0, '0', 'Нет', '2024-06-07 01:49:51', '2024-06-07 01:49:51');

-- --------------------------------------------------------

--
-- Структура таблицы `attachmentable`
--

CREATE TABLE `attachmentable` (
  `id` int UNSIGNED NOT NULL,
  `attachmentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachmentable_id` int UNSIGNED NOT NULL,
  `attachment_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `attachments`
--

CREATE TABLE `attachments` (
  `id` int UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint NOT NULL DEFAULT '0',
  `sort` int NOT NULL DEFAULT '0',
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `alt` text COLLATE utf8mb4_unicode_ci,
  `hash` text COLLATE utf8mb4_unicode_ci,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'public',
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `calls`
--

CREATE TABLE `calls` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `permissions` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `price`, `active`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Анализ крови', 'Анализ крови на базовые показатели.', 1200, 1, '{\"Хирург\": \"0\", \"platform.index\": \"0\", \"Терапевт\": \"0\", \"platform.systems.roles\": \"0\", \"platform.systems.users\": \"0\", \"Мед. персонал\": \"1\", \"Эндокринолог\": \"0\", \"platform.systems.attachment\": \"0\", \"Гастроэнторолог\": \"0\"}', '2024-06-06 08:09:00', '2024-06-07 01:49:43'),
(2, 'Консультация эндокринолога', 'На консультации у эндокринолога вы можете спросить интересующие вас вопросы, которые касаются гармонов', 2499, 1, '{\"Хирург\": \"0\", \"platform.index\": \"0\", \"Терапевт\": \"0\", \"platform.systems.roles\": \"0\", \"platform.systems.users\": \"0\", \"Мед. персонал\": \"0\", \"Эндокринолог\": \"1\", \"platform.systems.attachment\": \"0\", \"Гастроэнторолог\": \"0\"}', '2024-06-06 08:10:26', '2024-06-06 08:10:26'),
(3, 'Консультация гастроэнторолога', 'Гастроэнтолог - специалист по желудку и ЖКТ. Если вы испытываете боли в желудке, запоры, тошноту и прочие проблемы - требуется консультация', 2499, 1, '{\"Хирург\": \"0\", \"platform.index\": \"0\", \"Терапевт\": \"0\", \"platform.systems.roles\": \"0\", \"platform.systems.users\": \"0\", \"Мед. персонал\": \"0\", \"Эндокринолог\": \"0\", \"platform.systems.attachment\": \"0\", \"Гастроэнторолог\": \"1\"}', '2024-06-06 08:12:07', '2024-06-06 08:12:07'),
(4, 'Консультация терапевта', 'Терапевт - специалист, который определяет с чем именно у вас проблема и направляет к нужному специалисту', 1999, 1, '{\"Хирург\": \"0\", \"platform.index\": \"0\", \"Терапевт\": \"1\", \"platform.systems.roles\": \"0\", \"platform.systems.users\": \"0\", \"Мед. персонал\": \"0\", \"Эндокринолог\": \"0\", \"platform.systems.attachment\": \"0\", \"Гастроэнторолог\": \"0\"}', '2024-06-06 08:13:08', '2024-06-06 08:13:08'),
(5, 'Удаление аппендикса (аппендицит)', 'Хирург - специалист с большим опытом в медицине, который может совершать операции на человеческом теле. ПЕРЕД ЗАПИСЬЮ ПРОКОНСУЛЬТИРУЙТЕСЬ С ВРАЧОМ', 4999, 1, '{\"Хирург\": \"1\", \"platform.index\": \"0\", \"Терапевт\": \"0\", \"platform.systems.roles\": \"0\", \"platform.systems.users\": \"0\", \"Мед. персонал\": \"0\", \"Эндокринолог\": \"0\", \"platform.systems.attachment\": \"0\", \"Гастроэнторолог\": \"0\"}', '2024-06-06 08:15:51', '2024-06-06 08:15:51');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2015_04_12_000000_create_orchid_users_table', 1),
(4, '2015_10_19_214424_create_orchid_roles_table', 1),
(5, '2015_10_19_214425_create_orchid_role_users_table', 1),
(6, '2016_08_07_125128_create_orchid_attachmentstable_table', 1),
(7, '2017_09_17_125801_create_notifications_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2024_02_20_171951_appointments', 1),
(11, '2024_02_20_173537_category', 1),
(12, '2024_02_20_192105_specialists', 1),
(13, '2024_02_20_192258_list_of_speciality', 1),
(14, '2024_02_28_193232_userscards', 1),
(15, '2024_03_21_212717_calls', 1),
(16, '2024_05_08_043813_add_column_to_users_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Doctor', 'Врач', '{\"platform.index\": \"1\", \"platform.systems.roles\": \"1\", \"platform.systems.users\": \"1\", \"platform.systems.attachment\": \"1\"}', '2024-06-06 08:02:41', '2024-06-06 08:02:41'),
(2, 'admin', 'Администратор', '{\"platform.index\": \"1\", \"platform.systems.roles\": \"1\", \"platform.systems.users\": \"1\", \"platform.systems.attachment\": \"1\"}', '2024-06-06 08:03:00', '2024-06-06 08:03:00');

-- --------------------------------------------------------

--
-- Структура таблицы `role_users`
--

CREATE TABLE `role_users` (
  `user_id` bigint UNSIGNED NOT NULL,
  `role_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`) VALUES
(179, 1),
(180, 1),
(181, 1),
(182, 1),
(183, 1),
(184, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `specialists`
--

CREATE TABLE `specialists` (
  `id` bigint UNSIGNED NOT NULL,
  `id_user` int NOT NULL,
  `id_speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `specialities`
--

CREATE TABLE `specialities` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `specialities`
--

INSERT INTO `specialities` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Хирург', '2024-06-06 08:05:54', '2024-06-06 08:05:54'),
(2, 'Эндокринолог', '2024-06-06 08:06:01', '2024-06-06 08:06:01'),
(3, 'Гастроэнторолог', '2024-06-06 08:06:10', '2024-06-06 08:06:10'),
(4, 'Мед. персонал', '2024-06-06 08:06:29', '2024-06-06 08:06:29'),
(5, 'Терапевт', '2024-06-06 08:08:28', '2024-06-06 08:08:28');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rules` int NOT NULL DEFAULT '0',
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `cab` int NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permissions` json DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `tel`, `email_verified_at`, `password`, `rules`, `img`, `cab`, `remember_token`, `created_at`, `updated_at`, `permissions`, `google_id`) VALUES
(153, 'Андрей', 'Сулейков', 'kseleznev@example.net', '+7 (922) 843-6535', NULL, '$2y$12$vTpAOW.fz984gaQ19RcyGO3ZVGenVyHPXibeqjrKgnO.iUNl.2amO', 1, '', 1, 'j', '2024-06-06 18:51:31', '2024-06-06 18:51:31', NULL, NULL),
(154, 'Матвей', 'Филатов', 'ukornilov@bk.ru', '8-800-521-5226', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 1, 'https://via.placeholder.com/300x300.png/0000ff?text=people+iste', 0, 'ikvYZyyyxu', '2024-03-20 05:00:20', '2024-06-06 18:56:35', NULL, NULL),
(155, 'Антон', 'Лазарева', 'tatyna.makarov@potapov.org', '(812) 324-31-82', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 0, 'https://via.placeholder.com/300x300.png/0055dd?text=people+in', 0, 'wBlYiADDyK', '2024-03-29 10:09:20', '2024-06-06 18:56:35', NULL, NULL),
(156, 'Екатерина', 'Гущина', 'kulagina.adam@rambler.ru', '+7 (922) 018-8091', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 0, 'https://via.placeholder.com/300x300.png/00ee77?text=people+velit', 0, '0OZw4whfK6', '2024-06-06 02:30:57', '2024-06-06 18:56:35', NULL, NULL),
(157, 'Яна', 'Буров', 'clavrentev@mail.ru', '(495) 147-1172', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 1, 'https://via.placeholder.com/300x300.png/000033?text=people+ipsum', 0, 'Cn1EpPzWMc', '2023-09-22 09:13:56', '2024-06-06 18:56:35', NULL, NULL),
(158, 'Василиса', 'Князева', 'tit01@stepanov.ru', '(35222) 36-9820', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 1, 'https://via.placeholder.com/300x300.png/00ee88?text=people+ad', 0, 'LPiCGEQN4l', '2024-01-23 18:32:27', '2024-06-06 18:56:35', NULL, NULL),
(159, 'Вероника', 'Рябов', 'kulagina.klavdiy@list.ru', '8-800-008-3324', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 2, 'https://via.placeholder.com/300x300.png/00dd55?text=people+cum', 0, 'wZlWs5FwUm', '2023-11-22 01:23:37', '2024-06-06 18:56:35', NULL, NULL),
(160, 'Артемий', 'Крюкова', 'gordei50@turov.ru', '(812) 641-17-23', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 1, 'https://via.placeholder.com/300x300.png/007766?text=people+dolorem', 0, 'leVUs3sHot', '2023-12-19 16:11:52', '2024-06-06 18:56:35', NULL, NULL),
(161, 'Сергей', 'Полякова', 'kalinin.sofy@cernova.ru', '(495) 055-2666', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 0, 'https://via.placeholder.com/300x300.png/00ff99?text=people+assumenda', 0, 'FBgB3QaXfB', '2024-01-24 15:00:20', '2024-06-06 18:56:35', NULL, NULL),
(162, 'Ольга', 'Панфилов', 'innokentii.tarasov@mail.ru', '+7 (922) 918-9324', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 1, 'https://via.placeholder.com/300x300.png/00aa77?text=people+sequi', 0, 'MD7S0KYf3Y', '2024-02-07 22:12:39', '2024-06-06 18:56:35', NULL, NULL),
(163, 'Валерий', 'Савина', 'miroslav68@sestakov.org', '(35222) 80-2244', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 2, 'https://via.placeholder.com/300x300.png/00ffaa?text=people+quidem', 0, 'vAz45nOlON', '2023-09-02 06:36:15', '2024-06-06 18:56:35', NULL, NULL),
(164, 'Дмитрий', 'Ситникова', 'rodion.zimina@gmail.com', '(35222) 48-6266', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 2, 'https://via.placeholder.com/300x300.png/00ccdd?text=people+qui', 0, 'D2KVCUDrpo', '2024-01-26 23:47:57', '2024-06-06 18:56:35', NULL, NULL),
(165, 'Макар', 'Федотов', 'fomin.zakar@panov.ru', '8-800-559-0890', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 0, 'https://via.placeholder.com/300x300.png/003355?text=people+nihil', 0, 'XHYzxiALD7', '2023-07-13 21:08:52', '2024-06-06 18:56:35', NULL, NULL),
(166, 'Алиса', 'Лаврентьева', 'pvlasova@kalinin.org', '(35222) 56-1298', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 2, 'https://via.placeholder.com/300x300.png/005555?text=people+quis', 0, 'Gdx68rmeHw', '2024-03-28 00:54:04', '2024-06-06 18:56:35', NULL, NULL),
(167, 'Артём', 'Игнатьев', 'nelli.dyckova@rambler.ru', '(35222) 46-7443', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 1, 'https://via.placeholder.com/300x300.png/0055ee?text=people+soluta', 0, '7G9HEmWugo', '2023-09-02 08:54:30', '2024-06-06 18:56:35', NULL, NULL),
(168, 'Изольда', 'Колобова', 'bronislav06@mail.ru', '8-800-747-9594', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 1, 'https://via.placeholder.com/300x300.png/00ff33?text=people+in', 0, 'Ia4itYl2I5', '2024-03-22 01:04:06', '2024-06-06 18:56:35', NULL, NULL),
(169, 'Зинаида', 'Горшков', 'gerasimov.kirill@petrova.net', '+7 (922) 069-8132', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 2, 'https://via.placeholder.com/300x300.png/00ff66?text=people+aspernatur', 0, 'OfKB2B9hUB', '2023-11-09 03:48:47', '2024-06-06 18:56:35', NULL, NULL),
(170, 'Ника', 'Назаров', 'qkabanov@kalinin.com', '8-800-964-7800', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 0, 'https://via.placeholder.com/300x300.png/001199?text=people+sint', 0, 'vV5AfOndXJ', '2024-01-26 06:37:56', '2024-06-06 18:56:35', NULL, NULL),
(171, 'Раиса', 'Боброва', 'ykovleva.artem@uvarova.ru', '(495) 850-1626', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 2, 'https://via.placeholder.com/300x300.png/001155?text=people+commodi', 0, '7gG9BDyAyB', '2023-11-16 15:25:24', '2024-06-06 18:56:35', NULL, NULL),
(172, 'Альбина', 'Фёдорова', 'valeriy.fokin@evseev.ru', '(812) 645-99-13', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 1, 'https://via.placeholder.com/300x300.png/007799?text=people+nesciunt', 0, 'A1l0NhAwdo', '2024-02-28 14:57:45', '2024-06-06 18:56:35', NULL, NULL),
(173, 'Анна', 'Корнилов', 'bkononov@rambler.ru', '(35222) 53-1971', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 0, 'https://via.placeholder.com/300x300.png/00bb44?text=people+et', 0, 'pEKGUUhCYO', '2023-12-11 05:54:33', '2024-06-06 18:56:35', NULL, NULL),
(174, 'Ярослав', 'Лукин', 'nataly78@baranova.com', '(495) 638-3609', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 0, 'https://via.placeholder.com/300x300.png/005544?text=people+ut', 0, 'KuA8HbCg4a', '2024-05-07 09:28:41', '2024-06-06 18:56:35', NULL, NULL),
(175, 'Олег', 'Голубев', 'lydmila.martynova@bk.ru', '(495) 151-5906', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 0, 'https://via.placeholder.com/300x300.png/00aaff?text=people+quaerat', 0, '2Xxb3vPqiH', '2024-01-18 13:00:12', '2024-06-06 18:56:35', NULL, NULL),
(176, 'Викентий', 'Котов', 'inna19@inbox.ru', '(812) 574-57-18', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 1, 'https://via.placeholder.com/300x300.png/00aa00?text=people+animi', 0, '7VcMe6Diaa', '2024-05-20 23:47:50', '2024-06-06 18:56:35', NULL, NULL),
(177, 'Марина', 'Фёдорова', 'hdorofeeva@inbox.ru', '+7 (922) 911-1583', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 1, 'https://via.placeholder.com/300x300.png/00ff77?text=people+adipisci', 0, 'SFpUQMvppd', '2023-12-15 19:06:33', '2024-06-06 18:56:35', NULL, NULL),
(178, 'Станислав', 'Жданов', 'grigorii49@gmail.com', '8-800-787-3565', '2024-06-06 18:56:35', '$2y$12$JApzI/gcfu3r6WRYyMBxzedjW53QKMSDuF0DdvH5e6y8dANY9p51y', 2, 'https://via.placeholder.com/300x300.png/0044bb?text=people+labore', 15, '84Gv0pC1Bd', '2023-09-23 13:06:56', '2024-06-06 21:02:26', '{\"Хирург\": \"0\", \"platform.index\": \"0\", \"Терапевт\": \"0\", \"platform.systems.roles\": \"0\", \"platform.systems.users\": \"0\", \"Мед. персонал\": \"0\", \"Эндокринолог\": \"0\", \"platform.systems.attachment\": \"0\", \"Гастроэнторолог\": \"0\"}', NULL),
(179, 'Андрей', 'Сулейков', 'arkadii.zaitev@example.org', '(35222) 33-9738', NULL, '$2y$12$iQ2zJPTsyOBNJzea4FpD8.e2ai1jNJyngCB8i.FmBOo/lWKBnl/JW', 1, 'https://demidkovo.ru/tseny/%D0%94%D0%BE%D0%BA%D1%82%D0%BE%D1%80.jpg', 1, 'r', '2024-06-06 18:56:36', '2024-06-06 19:05:08', '{\"Хирург\": \"0\", \"platform.index\": \"0\", \"Терапевт\": \"0\", \"platform.systems.roles\": \"0\", \"platform.systems.users\": \"0\", \"Мед. персонал\": \"0\", \"Эндокринолог\": \"0\", \"platform.systems.attachment\": \"0\", \"Гастроэнторолог\": \"1\"}', NULL),
(180, 'Антон', 'Калачков', 'bevdokimov@example.org', '(495) 794-0061', NULL, '$2y$12$04UCfRI37pqKAlICAnnRyu4d1klKnNHhQUWzmi0W..hKEMNo88z8O', 1, 'https://www.cctr.ru/upload/iblock/bef/bef1164dae4ab53a7cd182ee22debbdf.jpg', 1, 'd', '2024-06-06 18:56:36', '2024-06-06 19:03:53', '{\"Хирург\": \"1\", \"platform.index\": \"0\", \"Терапевт\": \"0\", \"platform.systems.roles\": \"0\", \"platform.systems.users\": \"0\", \"Мед. персонал\": \"0\", \"Эндокринолог\": \"0\", \"platform.systems.attachment\": \"0\", \"Гастроэнторолог\": \"0\"}', NULL),
(181, 'Руслан', 'Гинатуллин', 'ylian32@example.com', '(495) 834-9685', NULL, '$2y$12$IBZWigdRf7qNgoY0iX2lsuL1OuXvjrAeuzGWLR04LfieYpjr4mkSm', 1, 'https://i.pinimg.com/736x/36/47/cf/3647cffc9f78912cfeb14975d6def97b.jpg', 1, 'i', '2024-06-06 18:56:36', '2024-06-06 19:05:36', '{\"Хирург\": \"0\", \"platform.index\": \"0\", \"Терапевт\": \"1\", \"platform.systems.roles\": \"0\", \"platform.systems.users\": \"0\", \"Мед. персонал\": \"0\", \"Эндокринолог\": \"0\", \"platform.systems.attachment\": \"0\", \"Гастроэнторолог\": \"0\"}', NULL),
(182, 'Кирилл', 'Сугаков', 'bolsakova.platon@example.org', '(812) 010-66-49', NULL, '$2y$12$IAeJGgfPFUzQrCD7a9cPX.VhrxkoTdQdJZ7p/Iy.VYCVR7xonRlYW', 1, 'https://nordin.by/wp-content/uploads/2022/12/doctor-full.jpg', 25, 's', '2024-06-06 18:56:36', '2024-06-06 20:10:17', '{\"Хирург\": \"0\", \"platform.index\": \"0\", \"Терапевт\": \"0\", \"platform.systems.roles\": \"0\", \"platform.systems.users\": \"0\", \"Мед. персонал\": \"1\", \"Эндокринолог\": \"0\", \"platform.systems.attachment\": \"0\", \"Гастроэнторолог\": \"0\"}', NULL),
(183, 'Артем', 'Митрофанов', 'sitnikova.elizaveta@example.com', '(495) 655-2433', NULL, '$2y$12$9Zavszr7nGDIKDQt5GZ2gud/6Yr3F/gbLhhgDoHPU7IBZ/vG.z1oO', 1, 'https://images.gostudy.cz/static/doctor-cut.png', 15, 'm', '2024-06-06 18:56:36', '2024-06-06 21:37:23', '{\"Хирург\": \"0\", \"platform.index\": \"0\", \"Терапевт\": \"0\", \"platform.systems.roles\": \"0\", \"platform.systems.users\": \"0\", \"Мед. персонал\": \"0\", \"Эндокринолог\": \"1\", \"platform.systems.attachment\": \"0\", \"Гастроэнторолог\": \"0\"}', NULL),
(184, 'Богдан', 'Бурмакин', 'r1den0403@icloud.com', '79520452714', NULL, '$2y$12$AMnyIGYVYarQUD.HdwCtyOADW04.SoQyCbETbkpjeaQSec1wDZ9u2', 0, '', 0, NULL, '2024-06-06 18:57:01', '2024-06-06 19:32:28', '{\"Хирург\": \"0\", \"platform.index\": \"1\", \"Терапевт\": \"0\", \"platform.systems.roles\": \"1\", \"platform.systems.users\": \"1\", \"Мед. персонал\": \"0\", \"Эндокринолог\": \"0\", \"platform.systems.attachment\": \"1\", \"Гастроэнторолог\": \"0\"}', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `user_cards`
--

CREATE TABLE `user_cards` (
  `id` bigint UNSIGNED NOT NULL,
  `id_user` int NOT NULL,
  `id_doctor` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `attachmentable`
--
ALTER TABLE `attachmentable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attachmentable_attachmentable_type_attachmentable_id_index` (`attachmentable_type`,`attachmentable_id`),
  ADD KEY `attachmentable_attachment_id_foreign` (`attachment_id`);

--
-- Индексы таблицы `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `calls`
--
ALTER TABLE `calls`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Индексы таблицы `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_users_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `specialists`
--
ALTER TABLE `specialists`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `specialities`
--
ALTER TABLE `specialities`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_tel_unique` (`tel`);

--
-- Индексы таблицы `user_cards`
--
ALTER TABLE `user_cards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=369;

--
-- AUTO_INCREMENT для таблицы `attachmentable`
--
ALTER TABLE `attachmentable`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `calls`
--
ALTER TABLE `calls`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `specialists`
--
ALTER TABLE `specialists`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `specialities`
--
ALTER TABLE `specialities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT для таблицы `user_cards`
--
ALTER TABLE `user_cards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `attachmentable`
--
ALTER TABLE `attachmentable`
  ADD CONSTRAINT `attachmentable_attachment_id_foreign` FOREIGN KEY (`attachment_id`) REFERENCES `attachments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `role_users`
--
ALTER TABLE `role_users`
  ADD CONSTRAINT `role_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

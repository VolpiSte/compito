SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `esempio` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `esempio` (`id`, `nome`, `time`) VALUES
(1, 'Anna', '2024-01-15 11:23:41'),
(2, 'Maria', '2024-01-15 11:24:02'),
(3, 'Giovanni', '2024-01-15 11:24:16'),
(4, 'Michele', '2024-01-15 11:24:24');

ALTER TABLE `esempio`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `esempio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

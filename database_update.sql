--
-- Database: `sl_callwidget`
--
CREATE DATABASE sl_callwidget;

--
-- Table structure for table `cw_appusers`
--
CREATE TABLE `cw_appusers` (
  `id` int(19) NOT NULL,
  `domain_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_add` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for table `cw_appusers`
--
ALTER TABLE `cw_appusers` ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `cw_appusers`
--
ALTER TABLE `cw_appusers` MODIFY `id` int(19) NOT NULL AUTO_INCREMENT;


-----------------------------------------------------------

--
-- Table structure for table `cw_callrequests`
--

CREATE TABLE `cw_callrequests` (
  `id` int(19) NOT NULL,
  `main_user_id` int(19) NOT NULL COMMENT 'Id of cw_appusers',
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_number` BIGINT(19) NOT NULL,
  `date_add` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for table `cw_callrequests`
--
ALTER TABLE `cw_callrequests` ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `cw_callrequests`
--
ALTER TABLE `cw_callrequests` MODIFY `id` int(19) NOT NULL AUTO_INCREMENT;
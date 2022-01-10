ALTER TABLE `assignments`
	ADD COLUMN `priority` ENUM('High', 'Medium', 'Low') NOT NULL AFTER `user_created`;
ALTER TABLE `bookings` ADD `staging_status` ENUM('receptionist','doctor') NOT NULL DEFAULT 'receptionist' AFTER `user_id`;

ALTER TABLE `pos_pet_medical_detail` ADD `blood_pressure` VARCHAR(20) NULL DEFAULT NULL AFTER `general_q9_specify`, ADD `temperature` VARCHAR(20) NULL DEFAULT NULL AFTER `blood_pressure`, ADD `temp_type` VARCHAR(15) NULL DEFAULT NULL AFTER `temperature`;

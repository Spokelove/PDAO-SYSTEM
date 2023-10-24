SELECT 
    pwd_member.id,
    pwd_member.date_applied,
    pwd_member.application,
    pwd_member.last_name,
    pwd_member.first_name,
    pwd_member.middle_name,
    pwd_member.suffix_of_applicant,
    pwd_member.birthday,
    pwd_member.age,
    pwd_member.status,
    residence.id,
    residence.purok,
    residence.house_and_street,
    residence.barangay,
    residence.municipality
FROM pwd_member
JOIN residence ON pwd_member.id = residence.id;


SELECT 
    pwd_member.id,
    pwd_member.date_applied,
    pwd_member.application,
    pwd_member.last_name,
    pwd_member.first_name,
    pwd_member.middle_name,
    pwd_member.suffix_of_applicant,
    pwd_member.birthday,
    TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) AS age,
    pwd_member.status,
    residence.id,
    residence.purok,
    residence.house_and_street,
    residence.barangay,
    residence.municipality,
    familyback__idrefences.occupations,
    typesdisability.types_of_disability,
    causedisability.cause_of_disability,
    devices_given.device_given
SELECT 
    pwd_member.id,
    pwd_member.date_applied,
    pwd_member.application,
    pwd_member.last_name,
    pwd_member.first_name,
    pwd_member.middle_name,
    pwd_member.suffix_of_applicant,
    pwd_member.birthday,
    TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) AS age,
    pwd_member.status,
    residence.id,
    residence.purok,
    residence.house_and_street,
    residence.barangay,
    residence.municipality,
    familyback__idrefences.occupations,
    typesdisability.types_of_disability,
    causedisability.cause_of_disability,
    devices_given.device_given
FROM pwd_member
JOIN residence ON pwd_member.id = residence.id
JOIN familyback__idrefences ON pwd_member.id = familyback__idrefences.id
JOIN typesdisability ON pwd_member.id = typesdisability.id
JOIN causedisability ON pwd_member.id = causedisability.id
LEFT JOIN devices_given ON pwd_member.id = devices_given.id;


SELECT 
    pwd_member.id,
    pwd_member.date_applied,
    pwd_member.application,
    pwd_member.last_name,
    pwd_member.first_name,
    pwd_member.middle_name,
    pwd_member.suffix_of_applicant,
    pwd_member.birthday,
    TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) AS age,
    pwd_member.status,
    residence.id,
    residence.purok,
    residence.house_and_street,
    residence.barangay,
    residence.municipality,
    familyback__idrefences.occupations,
    typesdisability.types_of_disability,
    causedisability.cause_of_disability,
    COALESCE(devices_given.device_given, 'Default Device') AS device_given
FROM pwd_member
JOIN residence ON pwd_member.id = residence.id
JOIN familyback__idrefences ON pwd_member.id = familyback__idrefences.id
JOIN typesdisability ON pwd_member.id = typesdisability.id
JOIN causedisability ON pwd_member.id = causedisability.id
LEFT JOIN devices_given ON pwd_member.id = devices_given.id;

SELECT COUNT(*)
FROM causedisability
WHERE cause_of_disability IN ('Congenital /Inborn', 'Austim');

SELECT COUNT(*)
FROM causedisability
WHERE cause_of_disability = 'Congenital /Inborn' OR cause_of_disability = 'Austim';
SELECT *
FROM pwd_member
WHERE TIMESTAMPDIFF(YEAR, birthday, CURDATE()) BETWEEN 18 AND 30;
SELECT
    COUNT(*) AS total_devices,
    SUM(CASE WHEN p.gender = 'Male' THEN 1 ELSE 0 END) AS male_devices,
    SUM(CASE WHEN p.gender = 'Female' THEN 1 ELSE 0 END) AS female_devices
FROM
    devices d
JOIN
    pwd_member p ON d.member_id = p.id;



-- Bilangin ang mga lalaki na may devices
SELECT COUNT(*) AS male_device_given_count
FROM devices_given d
JOIN pwd_member p ON d.id = p.id
WHERE p.gender = 'Male';

-- Bilangin ang mga babae na may devices
SELECT COUNT(*) AS female_device_given_count
FROM devices_given d
JOIN pwd_member p ON d.id = p.id
WHERE p.gender = 'Female';

SELECT
    SUM(CASE WHEN gender = 'Male' THEN 1 ELSE 0 END) AS male_count,
    SUM(CASE WHEN gender = 'Female' THEN 1 ELSE 0 END) AS female_count
FROM
    pwd_member
WHERE
    application = 'Renew';
SELECT COUNT(*) AS totalEighteenBelow
FROM pwd_member
WHERE age < 18;
SELECT
    COUNT(*) AS total_cause_of_disabilities
FROM
    causedisability
WHERE
    JSON_LENGTH(cause_of_disability) > 0;
SELECT COUNT(*) as total_types_of_disabilities
FROM typesdisability
WHERE JSON_LENGTH(types_of_disability) > 0;

-- ========================================================================================================
SELECT *, SUBSTRING(cause_of_disability, 1, 23) AS arranged_codes
FROM causedisability;
SELECT COUNT(*) AS total_records
FROM causedisability;
SELECT *, SUBSTRING(cause_of_disability, 1, 20) AS arranged_codes
FROM causedisability;

-- ================================================================================================================


-- table for every causedisability total

SELECT category,`type`,COUNT(*) FROM 
 
(SELECT 
  JSON_EXTRACT(cause_of_disability, '$[0]') AS category, 
  JSON_EXTRACT(cause_of_disability, '$[1]') AS TYPE, 
id
FROM causedisability
WHERE JSON_EXTRACT(cause_of_disability, '$[1]') IS NOT NULL
 
UNION
 
SELECT 
  JSON_EXTRACT(cause_of_disability, '$[0]') AS category, 
  JSON_EXTRACT(cause_of_disability, '$[2]') AS TYPE, 
id
FROM causedisability
WHERE JSON_EXTRACT(cause_of_disability, '$[2]') IS NOT NULL
 
UNION
 
SELECT 
  JSON_EXTRACT(cause_of_disability, '$[0]') AS category, 
  JSON_EXTRACT(cause_of_disability, '$[3]') AS TYPE, 
id
FROM causedisability
WHERE JSON_EXTRACT(cause_of_disability, '$[3]') IS NOT NULL) xx
 
GROUP BY category, `type`;
-- table for every causedisability total
-- ====================================================================================


    SELECT 
        JSON_EXTRACT(cause_of_disability, '$[0]') AS category, 
        JSON_EXTRACT(cause_of_disability, '$[2]') AS TYPE, 
        id
    FROM causedisability
    WHERE JSON_EXTRACT(cause_of_disability, '$[2]') IS NOT NULL

 
--   =========================================================================================

SELECT 
    JSON_EXTRACT(cd.cause_of_disability, '$[0]') AS category, 
    JSON_EXTRACT(cd.cause_of_disability, '$[2]') AS TYPE, 
    pm.id AS id,
    pm.last_name,
    pm.first_name,
    pm.middle_name,
    pm.suffix_of_applicant,
    pm.birthday,
    TIMESTAMPDIFF(YEAR, pm.birthday, CURDATE()) AS age,
    pm.gender
FROM causedisability cd
JOIN pwd_member pm ON cd.id = pm.id
WHERE JSON_EXTRACT(cd.cause_of_disability, '$[2]') IS NOT NULL;


-- ===========================================================================================


SELECT
    JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, "$[1]")) as cause_type_1,
    JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, "$[2]")) as cause_type_2,
    JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, "$[3]")) as cause_type_3,
    JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, "$[4]")) as cause_type_4,
    JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, "$[5]")) as cause_type_5,
    JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, "$[6]")) as cause_type_6,
    JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, "$[7]")) as cause_type_7,
    COUNT(*) as total
FROM
   causedisability
WHERE
    JSON_EXTRACT(cause_of_disability, "$[1]") IS NOT NULL
    OR JSON_EXTRACT(cause_of_disability, "$[2]") IS NOT NULL
    OR JSON_EXTRACT(cause_of_disability, "$[3]") IS NOT NULL
    OR JSON_EXTRACT(cause_of_disability, "$[4]") IS NOT NULL
    OR JSON_EXTRACT(cause_of_disability, "$[5]") IS NOT NULL
    OR JSON_EXTRACT(cause_of_disability, "$[6]") IS NOT NULL
    OR JSON_EXTRACT(cause_of_disability, "$[7]") IS NOT NULL
GROUP BY
    cause_type_1, cause_type_2, cause_type_3, cause_type_4, cause_type_5, cause_type_6, cause_type_7;

-- ========================================================================================================================
--  i need this table
SELECT 
    pm.id AS id,
    pm.last_name,
    pm.first_name,
    pm.middle_name,
    pm.birthday,
    cd.cause_of_disability AS cause_of_disability,
    JSON_EXTRACT(cd.cause_of_disability, '$[0]') AS category,
    JSON_EXTRACT(cd.cause_of_disability, '$[2]') AS type,
    TIMESTAMPDIFF(YEAR, pm.birthday, CURDATE()) AS age,
    pm.gender
FROM pwd_member pm
LEFT JOIN causedisability cd ON pm.id = cd.id;
-- i need this table
-- ======================================================================================================================================
SELECT 
    pm.id AS id,
    pm.last_name,
    pm.first_name,
    pm.middle_name,
    pm.birthday,
    cd.cause_of_disability AS cause_of_disability,
    JSON_EXTRACT(cd.cause_of_disability, '$[0]') AS category,
    JSON_EXTRACT(cd.cause_of_disability, '$[2]') AS type,
    TIMESTAMPDIFF(YEAR, pm.birthday, CURDATE()) AS age,
    pm.gender,
    r.barangay,
    r.municipality,
    td.types_of_disability,
    dg.device_given
FROM pwd_member pm
LEFT JOIN causedisability cd ON pm.id = cd.id
LEFT JOIN residence r ON pm.id = r.id
LEFT JOIN typesdisability td ON pm.id = td.id
LEFT JOIN devices_given dg ON pm.id = dg.id;
--==================================================================================================================================================


SELECT 
    pm.id AS id,
    pm.last_name,
    pm.first_name,
    pm.middle_name,
    pm.birthday,
    cd.cause_of_disability AS cause_of_disability,
    JSON_EXTRACT(cd.cause_of_disability, '$[0]') AS category,
    JSON_EXTRACT(cd.cause_of_disability, '$[2]') AS type,
    TIMESTAMPDIFF(YEAR, pm.birthday, CURDATE()) AS age,
    pm.gender,
    r.barangay,
    r.municipality,
    td.types_of_disability,
    dg.device_given,
    (
        SELECT COUNT(*) 
        FROM causedisability 
        WHERE id = pm.id
    ) AS total_causedisability,
    (
        SELECT COUNT(*) 
        FROM devices_given 
        WHERE id = pm.id
    ) AS total_devices_given
FROM pwd_member pm
LEFT JOIN causedisability cd ON pm.id = cd.id
LEFT JOIN residence r ON pm.id = r.id
LEFT JOIN typesdisability td ON pm.id = td.id
LEFT JOIN devices_given dg ON pm.id = dg.id;

-- ===========================================================================================

SELECT SUM(id_given) as total_id_given FROM ids;

SELECT
    SUM(CASE WHEN p.gender = 'Female' THEN i.id_given ELSE 0 END) as female_total,
    SUM(CASE WHEN p.gender = 'Male' THEN i.id_given ELSE 0 END) as male_total
FROM ids as i
JOIN pwd_member as p ON i.id = p.id;
SELECT * FROM ids;

SELECT COUNT(*) as total_ids FROM ids;
SELECT *
FROM pwd_member
WHERE TIMESTAMPDIFF(YEAR, birthday, CURDATE()) < 18;
SELECT COUNT(*) AS total_below_18
FROM pwd_member
WHERE TIMESTAMPDIFF(YEAR, birthday, CURDATE()) < 18;
SELECT
    COUNT(*) AS totalMaleCount
FROM pwd_member
WHERE gender = 'Male';

SELECT
    COUNT(*) AS totalFemaleCount
FROM pwd_member
WHERE gender = 'Female';

SELECT
    SUM(CASE WHEN gender = 'Male' AND TIMESTAMPDIFF(YEAR, birthday, CURDATE()) < 18 THEN 1 ELSE 0 END) AS total_male_below_18,
    SUM(CASE WHEN gender = 'Female' AND TIMESTAMPDIFF(YEAR, birthday, CURDATE()) < 18 THEN 1 ELSE 0 END) AS total_female_below_18
FROM pwd_member;




SELECT first_name, middle_name, last_name, application
FROM pwd_member;SELECT
    CASE
        WHEN DATEDIFF(NOW(), date_applied) >= 1825 THEN 'Membership has expired after 5 years'
        ELSE 'Membership is still active'
    END AS alert_message
FROM pwd_member;






SELECT
    pwd_member.pwd_no,
    pwd_member.last_name,
    pwd_member.first_name,
    pwd_member.middle_name,
    pwd_member.age,
    pwd_member.birthday,
    pwd_member.status,
    pwd_member.suffix_of_applicant,
    pwd_member.date_applied,
    typesdisability.types_of_disability AS disability_type,
    causedisability.cause_of_disability AS disability_cause,
    residence.purok,
    residence.barangay,
    residence.municipality,
   familyback__idrefences.occupations AS occupation,
   familyback__idrefences.father_last_name AS father_last_name,
   familyback__idrefences.father_first_name AS father_first_name,
   familyback__idrefences.father_middle_name AS father_middle_name,
   familyback__idrefences.suffix_of_father AS suffix_of_father,
   familyback__idrefences.mother_last_name AS mother_last_name,
   familyback__idrefences.mother_first_name AS mother_first_name,
   familyback__idrefences.mother_middle_name AS mother_middle_name,
   familyback__idrefences.guardian_last_name AS guardian_last_name,
   familyback__idrefences.guardian_first_name AS guardian_first_name,
   familyback__idrefences.guardian_middle_name AS guardian_middle_name,
    devices_given.device_given
FROM
    pwd_member
LEFT JOIN typesdisability ON pwd_member.id = typesdisability.id
LEFT JOIN causedisability ON pwd_member.id = causedisability.id
LEFT JOIN residence ON pwd_member.id = residence.id
LEFT JOIN familyback__idrefences ON pwd_member.id =familyback__idrefences.id
LEFT JOIN devices_given ON pwd_member.id = devices_given.id;

-------------------------------------------------------------------------------------

SELECT
    residence.barangay,
    COUNT(*) AS total_members
FROM
    residence
LEFT JOIN pwd_member ON residence.pwdmember_id = pwd_member.id
GROUP BY
    residence.barangay;

------------------------------------------------------------------------------------------------------
SELECT category, `type`, COUNT(*) FROM (
    SELECT 
        JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, '$[0]')) AS category, 
        JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, '$[1]')) AS type
    FROM causedisability
    WHERE JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, '$[1]')) IS NOT NULL
    
    UNION ALL
    
    SELECT 
        JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, '$[0]')) AS category, 
        JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, '$[2]')) AS type
    FROM causedisability
    WHERE JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, '$[2]')) IS NOT NULL
    
    UNION ALL
    
    SELECT 
        JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, '$[0]')) AS category, 
        JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, '$[3]')) AS type
    FROM causedisability
    WHERE JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, '$[3]')) IS NOT NULL
    
    UNION ALL
    
    SELECT 
        JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, '$[0]')) AS category, 
        JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, '$[4]')) AS type
    FROM causedisability
    WHERE JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, '$[4]')) IS NOT NULL
    
    UNION ALL
    
    SELECT 
        JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, '$[0]')) AS category, 
        JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, '$[5]')) AS type
    FROM causedisability
    WHERE JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, '$[5]')) IS NOT NULL
    
    UNION ALL
    
    SELECT 
        JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, '$[0]')) AS category, 
        JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, '$[6]')) AS type
    FROM causedisability
    WHERE JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, '$[6]')) IS NOT NULL
) xx
-- GROUP BY category, `type`;
-- =============================================================================================================

SELECT COUNT(*) AS total_autism
FROM causedisability
WHERE JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, '$[1]')) = 'Austim';

SELECT COUNT(*) AS total_cause_of_disabilities
FROM causedisability
WHERE JSON_LENGTH(cause_of_disability) > 0;


SELECT
    pwd_member.pwd_no,
    pwd_member.last_name,
    pwd_member.first_name,
    pwd_member.middle_name,
    pwd_member.birthday,
    pwd_member.gender,
    YEAR(CURDATE()) - YEAR(pwd_member.birthday) - (DATE_FORMAT(CURDATE(), "%m%d") < DATE_FORMAT(pwd_member.birthday, "%m%d")) as age,
    pwd_member.status,
    residence.purok,
    residence.barangay,
    typesdisability.types_of_disability,
    causedisability.cause_of_disability,
    familyback__idrefences.occupations,
    familyback__idrefences.father_last_name,
    familyback__idrefences.father_first_name,
    familyback__idrefences.father_middle_name,
    familyback__idrefences.mother_last_name,
    familyback__idrefences.mother_first_name,
    familyback__idrefences.mother_middle_name,
    familyback__idrefences.guardian_last_name,
    familyback__idrefences.guardian_first_name,
    familyback__idrefences.guardian_middle_name,
    devices_given.device_given
FROM pwd_member
LEFT JOIN residence ON  residence.pwdmember_id
LEFT JOIN typesdisability ON typesdisability.pwdmember_id
LEFT JOIN causedisability ON  causedisability.pwdmember_id
LEFT JOIN familyback__idrefences ON  familyback__idrefences.pwdmember_id
LEFT JOIN devices_given ON  devices_given.pwdmember_id;


-- ========================================================================
SELECT
    pwd_member.id,
    pwd_member.pwd_no,
    pwd_member.last_name,
    pwd_member.first_name,
    pwd_member.suffix_of_applicant,
    pwd_member.birthday,
    pwd_member.gender,
    YEAR(CURDATE()) - YEAR(pwd_member.birthday) as age,
    pwd_member.status,
    residence.purok,
    residence.barangay,
    typesdisability.types_of_disability,
    causedisability.cause_of_disability,
    familyback__idrefences.occupations,
    familyback__idrefences.father_last_name,
    familyback__idrefences.father_first_name,
    familyback__idrefences.father_middle_name,
    familyback__idrefences.suffix_of_father,
    familyback__idrefences.mother_last_name,
    familyback__idrefences.mother_first_name,
    familyback__idrefences.mother_middle_name,
    familyback__idrefences.guardian_last_name,
    familyback__idrefences.guardian_first_name,
    familyback__idrefences.guardian_middle_name,
    familyback__idrefences.suffix_of_guardian,
    devices_given.device_given
FROM pwd_member
LEFT JOIN residence ON pwd_member.id = residence.pwdmember_id
LEFT JOIN typesdisability ON pwd_member.id = typesdisability.pwdmember_id
LEFT JOIN causedisability ON pwd_member.id = causedisability.pwdmember_id
LEFT JOIN familyback__idrefences ON pwd_member.id = familyback__idrefences.pwdmember_id
LEFT JOIN devices_given ON pwd_member.id = devices_given.pwdmember_id
GROUP BY
    residence.barangay;  -- Group by the "barangay" column


SELECT
    pwd_member.id,
    pwd_member.pwd_no,
    pwd_member.last_name,
    pwd_member.first_name,
    pwd_member.middle_name,
    pwd_member.suffix_of_applicant,
    pwd_member.birthday,
    pwd_member.gender,
    YEAR(CURDATE()) - YEAR(pwd_member.birthday) as age,
    pwd_member.status,
    residence.purok,
    residence.barangay,
    typesdisability.types_of_disability,
    causedisability.cause_of_disability,
    familyback__idrefences.occupations,
    familyback__idrefences.father_last_name,
    familyback__idrefences.father_first_name,
    familyback__idrefences.father_middle_name,
    familyback__idrefences.suffix_of_father,
    familyback__idrefences.mother_last_name,
    familyback__idrefences.mother_first_name,
    familyback__idrefences.mother_middle_name,
    familyback__idrefences.guardian_last_name,
    familyback__idrefences.guardian_first_name,
    familyback__idrefences.guardian_middle_name,
    familyback__idrefences.suffix_of_guardian,
    devices_given.device_given
FROM pwd_member
LEFT JOIN residence ON pwd_member.id = residence.pwdmember_id
LEFT JOIN typesdisability ON pwd_member.id = typesdisability.pwdmember_id
LEFT JOIN causedisability ON pwd_member.id = causedisability.pwdmember_id
LEFT JOIN familyback__idrefences ON pwd_member.id = familyback__idrefences.pwdmember_id
LEFT JOIN devices_given ON pwd_member.id = devices_given.pwdmember_id
GROUP BY pwd_member.id, pwd_member.pwd_no, pwd_member.last_name, pwd_member.first_name, pwd_member.middle_name, pwd_member.suffix_of_applicant, pwd_member.birthday, pwd_member.gender, pwd_member.status, residence.purok, residence.barangay, typesdisability.types_of_disability, causedisability.cause_of_disability, familyback__idrefences.occupations, familyback__idrefences.father_last_name, familyback__idrefences.father_first_name, familyback__idrefences.father_middle_name, familyback__idrefences.suffix_of_father, familyback__idrefences.mother_last_name, familyback__idrefences.mother_first_name, familyback__idrefences.mother_middle_name, familyback__idrefences.guardian_last_name, familyback__idrefences.guardian_first_name, familyback__idrefences.guardian_middle_name, familyback__idrefences.suffix_of_guardian, devices_given.device_given
ORDER BY residence.barangay;

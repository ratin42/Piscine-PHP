USE db_ratin;
SELECT TIMESTAMPDIFF(DAY, MIN(`date`), MAX(`date`)) AS 'uptime'
FROM `member_history`;

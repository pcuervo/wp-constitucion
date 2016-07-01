SELECT reference_code, GROUP_CONCAT( answer separator '|' ) 
FROM cc_sondeo_cdmx_user_answers
WHERE question_id IN ( 1, 2, 3, 7, 8, 25, 26, 28, 29, 32 )
AND reference_code IN ( 
	SELECT reference_code from cc_sondeo_cdmx_user_answers
	WHERE question_id = 1
	AND answer = 'CDMX'
)
GROUP BY reference_code
ORDER BY reference_code
<?php

//Countries Capitals for Trivia Night (SQL for Beginners #6)

SELECT capital
FROM countries
WHERE country LIKE 'E%' 
AND continent LIKE 'Afri_a'
ORDER BY capital
LIMIT 3;
# https://leetcode.com/problems/rising-temperature/
# Write your MySQL query statement below
select id
from Weather w1
where w1.temperature > (select temperature from Weather w2 where w1.recordDate- INTERVAL 1 DAY = w2.recordDate)
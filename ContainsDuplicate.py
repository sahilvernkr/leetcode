
class Solution:
    def containsDuplicate(self, nums: List[int]) -> bool:
        prevMap = {} #val : index

        for i, n in enumerate(nums):
            if n in prevMap:
                return True
            prevMap[n] = i

        return False



# https://leetcode.com/problems/contains-duplicate/description/
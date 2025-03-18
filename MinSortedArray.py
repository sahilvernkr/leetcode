class Solution:
    def findMin(self, nums: List[int]) -> int:
        min_value = min(nums)
        min_index = nums.index(min_value)

        if min_index == 0:
            return len(nums)
        return len(nums) - min_index







# https://leetcode.com/problems/find-minimum-in-rotated-sorted-array/description/
class Solution:
    def maxProfit(self, prices: List[int]) -> int:
        l, r = 0, 1  # buy, sell
        maxProfit = 0

        while(r < len(prices)):
            if(prices[l] < prices[r]):
                profit = prices[r] - prices[l]
                maxProfit = max(profit, maxProfit)
            else:
                l= r
            r += 1

        return maxProfit

# https://leetcode.com/problems/best-time-to-buy-and-sell-stock/description/
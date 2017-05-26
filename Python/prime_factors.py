# Prime Factors

# Inspired by one of Uncle Bob's TDD Kata

# Write a function that generates factors for a given number.

# The function takes an integer on the standard input and returns a list of integers. That list contains the prime factors in numerical sequence.
# Example

# 1 -> []
# 3 -> [3]
# 8 -> [2, 2, 2]
# 9 -> [3, 3]
# 12 -> [2, 2, 3]
def prime_factors(n):
    factors = []
    i = 2
    while i * i <= n:
        while n % i == 0:
            factors.append(i)
            n /= i
        i += 1
    if n > 1:
        factors.append(n)
    return factors

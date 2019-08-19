n,x=map(int,input().split())
a=1000
for _ in range(n):
    m=int(input())
    x-=m
    a=min(a,m)
print(x//a+n)
n,m,c=map(int,input().split())
B=list(map(int,input().split()))
a=0
for i in range(n):
    A=list(map(int,input().split()))
    x=0
    for j in range(m):
        x+=A[j]*B[j]
    if x+c>0:
        a+=1
print(a)

n=int(input())
A=list(map(int,input().split()))
print(-(-sum(A)//(len(A)-A.count(0))))
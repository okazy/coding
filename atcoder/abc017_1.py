x=0
for i in range(3):
    s,e=map(int,input().split())
    x+=s*e/10
print(int(x))
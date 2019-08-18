x=int(input())
a=1
for b in range(2,x):
    for p in range(2,x):
        t=b**p
        if t<=a:
            continue
        if x<t:
            break
        a=t
print(a)

#include<iostream>
using namespace std;
class function
{
	public: int a,b,c;
	float area(int r)
	{
		return(3.14*r*r);
	}
	int area(int l,int b)
	{
		return(l*b);
	}
};
int main()
{
	function f1;
//	int a,b,c;
	cin>>f1.a>>f1.b>>f1.c;
	cout<<"Area of circle:\n"<<f1.area(f1.a);
	cout<<"\nArea of rectangle:\n"<<f1.area(f1.b,f1.c);
	return 0;
}

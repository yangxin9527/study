/**
 * Created by admin on 2017/7/18.
 */
var arr = new Array();
arr[0]=1;
arr[1]=2;
console.log(arr);
var ob = new Object();
ob.a="1";
ob.b="2";
console.log(ob);
console.log("==========");


var x = 10;
function f1() {
    console.log(x)
}


function fn(f) {
    var x = 100;

    (function () {
        f();
    })()


};
fn(f1);

console.log("===============");

var max = 10;

fn=function (x) {
    if(x>max);
    console.log(x);
};
(function (f) {
    var max =100;
    f(12);
})(fn);



console.log("===============");
var o = {
    name :"小花",
    friend:['小明','小蓝']
}

function copy(o){
    var c = {};
    for(var i in o){
        c[i] = o[i];
    }
    return c;
}
//上面的形式，我在介绍原型式继承的时候原型式继承也是一种浅拷贝，有兴趣的看我上一篇文章,继承和这个稍有不同，在这里不做叙述
var c1 = copy(o);
c1.name = "小黑";
c1.friend.push("小白");

var c2 = copy(o);
console.log(c2.name);//小花
console.log(c2.friend);//'小明','小蓝'小白


console.log("===============");

var person1 = {
    toLocaleString : function(){
        return "Nikolaos";
    },
    toString : function(){
        return "Nicholas";
    }
};

var person2 = {
    toLocaleString : function(){
        return "Grigorios";
    },
    toString : function(){
        return "Greg";
    }
};

var people = [person1, person2];
console.log(people);      //Nicholas, Greg
console.log(people.toString()); //Nicholas, Greg
console.log(people.toLocaleString()) //Nikolaos, Grigorios



console.log("===============");



function fun(n,o) {
    console.log(o)
    return {
        fun:function(m){
            return fun(m,n);
        }
    };
}
var a = fun(0); a.fun(1); a.fun(2); a.fun(3);//undefined,?,?,?
var b = fun(0).fun(1).fun(2).fun(3);//undefined,?,?,?
var c = fun(0).fun(1); c.fun(2); c.fun(3);//undefined,?,?,?
//问:三行a,b,c的输出分别是什么？

!function(){
    console.log(this.name)
}();








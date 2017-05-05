/**
 * Created by admin on 2017/5/5.
 */
require.config({
    paths: {
        jquery: "../lib/jquery"
    }
});
// 加载requirejs脚本的script标签加入了data-main属性，这个属性指定的js将在加载完reuqire.js后处理，
// 我们把require.config的配置加入到data-main后，就可以使每一个页面都使用这个配置，然后页面中就可
// 以直接使用require来加载所有的短模块名
// data-main还有一个重要的功能，当script标签指定data-main属性时，require会默认的将data-main指
// 定的js为根路径，是什么意思呢？如上面的data-main="js/main"设定后，我们在使用require(['jquery'])
// 后(不配置jquery的paths)，require会自动加载js/jquery.js这个文件，而不是jquery.js，相当于默认配置了：
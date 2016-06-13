@include("template.header") {{--将重复使用的布局文件划分成不同的文件,在引入--}}
	<nav>   {{--在结构页面,要使用@show,而在数据界面使用end,这样当数据页面有值的时候,就会把结构页面覆盖掉--}}
		@section ('nav')
			
		@show   
	</nav>  
    
    <div class="container">    
		@yield("content","默认值"){{--yield调用在index中定义的数据,当为空时,会显示默认值;--}}
	</div>

@include("template.footer")
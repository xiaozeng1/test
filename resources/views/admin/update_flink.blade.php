@extends('admin.common.coomon')


@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
      <div class="row">
        <form action="/Flink/update" method="post" class="add-flink-form" autocomplete="off" draggable="false">
          <div class="col-md-9">
            <h1 class="page-header">修改友情链接</h1>
            <div class="add-article-box">
              <h2 class="add-article-box-title"><span>名称</span></h2>
              <div class="add-article-box-content">
                <input type="text" id="flink-name" name="name" class="form-control" value="异清轩技术博客" placeholder="在此处输入名称" required autofocus autocomplete="off">
                <span class="prompt-text">例如：异清轩技术博客</span> </div>
            </div>
            <div class="add-article-box">
              <h2 class="add-article-box-title"><span>WEB地址</span></h2>
              <div class="add-article-box-content">
                <input type="text" id="flink-url" name="url" class="form-control" value="http://www.ylsat.com" placeholder="在此处输入URL地址" required autocomplete="off">
                <span class="prompt-text">例子：<code>http://www.ylsat.com/</code>——不要忘了<code>http://</code></span> </div>
            </div>
            <div class="add-article-box">
              <h2 class="add-article-box-title"><span>图像地址</span></h2>
              <div class="add-article-box-content">
                <input type="text" id="flink-imgurl" name="imgurl" class="form-control" value="http://www.ylsat.com/images/logo.png" placeholder="在此处输入图像地址" required autocomplete="off">
                <span class="prompt-text">图像地址是可选的，可以为网站LOGO地址等</span> </div>
            </div>
            <div class="add-article-box">
              <h2 class="add-article-box-title"><span>描述</span></h2>
              <div class="add-article-box-content">
                <textarea class="form-control" name="describe" autocomplete="off">备注：异清轩技术博客</textarea>
                <span class="prompt-text">描述是可选的手工创建的内容总结</span> </div>
            </div>
          </div>
          <div class="col-md-3">
            <h1 class="page-header">操作</h1>
            <div class="add-article-box">
              <h2 class="add-article-box-title"><span>保存</span></h2>
              <div class="add-article-box-content">
                <p>
                  <label>状态：</label>
                  <span class="article-status-display">已增加</span></p>
                <p><label>target：</label><input type="radio" name="target" value="0" checked />_blank&nbsp;&nbsp;<input type="radio" name="target" value="1" />_self&nbsp;&nbsp;<input type="radio" name="target" value="2" />_top</p>
                <p><label>rel：</label><input type="radio" name="rel" value="0" checked />nofollow&nbsp;&nbsp;<input type="radio" name="rel" value="1"/>none</p>
                <p>
                  <label>修改于：</label>
                  <span class="article-time-display">
                  <input style="border: none;" type="datetime" name="time" value="2016-01-09 17:29:37" />
                  </span></p>
              </div>
              <div class="add-article-box-footer">
                <button class="btn btn-primary" type="submit" name="submit">更新</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
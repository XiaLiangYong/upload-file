#上传文件控件介绍
###主要内容有：
```
1. 上传单个文件
2. 上传多个文件
3. 断点续传
```
#第一步：安装
```
docker-compose up -d
docker和docker-comopose安装这里就不再做说明了 google都能解决
```
#第二步:常量说明 
```
UPLOAD_PATH 宿主机保存文件的目录
UPLOAD_MAX_FILE_SIZE 单个文件大小（默认20MB） 单位MB KB
UPLOAD_MAX_REQUEST_SIZE 上传文件最大总容量（默认200MB） 单位 MB KB
UPLOAD_FILE_EXT 文件格式（默认jpg,jpeg,png,gif,mp4,wmv）
UPLOADS_MCH_IDS 上传商户id（用于权限认证） 默认：10000:nicsdasdsdfdgdgdfg,100001:nisdfdfasdfdfsdfdf
```
#第三步:接口说明
```
1.上传单个文件接口
http://localhost:8080/upload/single??mch_id=XXX&time=XXX&nonce_str=XXX&sign=XXXX
2.上传多个接口
http://localhost:8080/upload/batch??mch_id=XXX&time=XXX&nonce_str=XXX&sign=XXXX
3.断点续传
http://localhost:8080/upload/pluploadUpload?mch_id=XXX&time=XXX&nonce_str=XXX&sign=XXXX
前端接入详情请查询：http://www.plupload.com/
```
#api接口返回说明
1. 失败返回
```
{
         "status": 103,
         "msg": "上传失败，因为文件是空的",
         "data": null
}
```
2. 成功返回
```
{
    "status": 0,
    "msg": "success",
    "data": {
        "0": "/2017/11/1/jpg/b6d9efc2ec88403d96b85ee4b33c702a.jpg"
    }
}
```

###status状态说明
```
1. 0 success
2. -1 系统繁忙
3. 101 上传失败 
4. 102 签名错误
5. 103 错误
6. 104 参数错误
7. 404 地址错误
```
###签名验证 见driver目录

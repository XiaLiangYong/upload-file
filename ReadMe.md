****上传控件说明****
#介绍
###主要内容有：
1. 上传单个文件
2. 上传多个文件
3. 断点续传

#第一步：安装
>docker-compose up -d
docker和docker-comopose安装这里就不再做说明了 google都能解决

#第二步:常量说明 
>UPLOAD_PATH 宿主机保存文件的目录
>UPLOAD_MAX_FILE_SIZE 单个文件大小（默认20MB） 单位MB KB
>UPLOAD_MAX_REQUEST_SIZE 上传文件最大总容量（默认200MB） 单位 MB KB
>UPLOAD_FILE_EXT 文件格式（默认jpg,jpeg,png,gif,mp4,wmv）
>UPLOADS_MCH_IDS 上传商户id（用于权限认证） 默认：10000:nicsdasdsdfdgdgdfg,100001:nisdfdfasdfdfsdfdf

###签名验证
#配置参数
USER=root #数据库用户名
PASSWORD=000 #数据库用户密码
DATABASE=php #数据库名称
#WEBMASTER=linhongshimouse@qq.com #管理员邮箱地址，用以发送备份失败消息提醒
BACKUP_DIR=/home/mouse/php/cakephp/app/sql/data #备份文件存储路径
LOGFILE=/home/mouse/php/cakephp/app/sql/log/sql.log #日记文件路径
DATE=$(date +%Y%m%d-%H%M) #日期格式（作为文件名）
DUMPFILE=$DATE.sql #备份文件名
ARCHIVE=$DATE.sql.tgz #压缩文件名
OPTIONS="-u$USER -p$PASSWORD -B $DATABASE" #mysqldump 参数 详情见帮助 mysqldump －help

#判断备份文件存储目录是否存在，否则创建该目录
if [ ! -d $BACKUP_DIR ] ;
then
mkdir -p "$BACKUP_DIR"
fi

#开始备份之前，将备份信息头写入日记文件
echo "========数据库备份开始 ======== " >> $LOGFILE
echo "备份时间:" $(date +%y-%m-%d%H:%M:%S) >> $LOGFILE
echo "———————————————– " >> $LOGFILE

#切换至备份目录
cd $BACKUP_DIR
#使用mysqldump 命令备份制定数据库，并以格式化的时间戳命名备份文件
mysqldump $OPTIONS > $DUMPFILE

#判断数据库备份是否成功

#输出备份过程结束的提醒消息
echo "======== 数据库备份完成 ========" >> $LOGFILE

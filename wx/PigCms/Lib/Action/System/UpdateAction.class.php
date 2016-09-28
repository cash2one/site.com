<?php
class UpdateAction extends BackAction
{
    public function index()
    {
        $version = './conf/version.php';
        $ver = (include $version);
        $ver = $ver['ver'];
        $ver = substr($ver, -8);
        $updatehost = 'http://e.eake.cn/update.php';
        $lastver = file_get_contents($updatehost . '?a=check&v=' . $ver);
        if ($lastver !== $ver) {
            $updateinfo = '<p class="red">���°汾Ϊ�� ' . $lastver . '</p><span>
		   <a href="javascript:if(confirm(\'����ǰ,��ȷ���Ѿ��������ݿ�ͳ��򱸷�!\'))location=\'./index.php?g=System&m=Update&a=updatenow\'">���������������</a>
           </span>';
            $chanageinfo = file_get_contents($updatehost . '?a=chanage&v=' . $lastver);
        } else {
            $updateinfo = '<p class="red">���°汾Ϊ�� ' . $lastver . '</p><span>�Ѿ�������ϵͳ ����Ҫ����</span>';
        }
        $this->assign('updateinfo', $updateinfo);
        $this->assign('chanageinfo', $chanageinfo);
        $this->display();
    }
    public function updatenow()
    {
        include 'Update.class.php';
        $version = './conf/version.php';
        $ver = (include $version);
        $ver = $ver['ver'];
        $ver = substr($ver, -8);
        $hosturl = urlencode('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
        $updatehost = 'http://e.eake.cn/update.php';
        $updatehosturl = $updatehost . '?a=update&v=' . $ver . '&u=' . $hosturl;
        $updatenowinfo = file_get_contents($updatehosturl);
        if (strstr($updatenowinfo, 'zip')) {
            $pathurl = $updatehost . '?a=down&f=' . $updatenowinfo;
            $updatedir = './conf/logs/Temp/update';
            delDirAndFile($updatedir);
            get_file($pathurl, $updatenowinfo, $updatedir);
            $updatezip = $updatedir . '/' . $updatenowinfo;
            $archive = new PclZip($updatezip);
            if ($archive->extract(PCLZIP_OPT_PATH, './', PCLZIP_OPT_REPLACE_NEWER) == 0) {
                $updatenowinfo = 'Զ�������ļ�������.����ʧ��</font>';
            } else {
                $sqlfile = $updatedir . '/update.sql';
                $sql = file_get_contents($sqlfile);
                $sql = str_replace('imicms_', C('DB_PREFIX'), $sql);
                $Model = new Model();
                error_reporting(0);
                foreach (split(';[
]+', $sql) as $v) {
                    @mysql_query($v);
                }
                $updatenowinfo = "<font color=red>������� {$sqlinfo}</font><span><a href=./index.php?g=System&m=Update>������� �鿴�Ƿ���������</a></span>";
            }
        }
        delDirAndFile($updatedir);
        $this->assign('updatenowinfo', $updatenowinfo);
        $this->display();
    }
}
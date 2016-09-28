<?php
class SystemAction extends BackAction
{
    public function index()
    {
        $where['display'] = 1;
        $where['status'] = 1;
        $order['sort'] = 'asc';
        $nav = M('node')->where($where)->order($order)->select();
        $this->assign('nav', $nav);
        $this->display();
    }
    public function menu()
    {
        if (empty($_GET['pid'])) {
            $where['display'] = 2;
            $where['status'] = 1;
            $where['pid'] = 2;
            $where['level'] = 2;
            $order['sort'] = 'asc';
            $nav = M('node')->where($where)->order($order)->select();
            $this->assign('nav', $nav);
        }
        $this->display();
    }
    public function main()
    {
        $version = './conf/version.php';
        $ver = (include $version);
        $ver = $ver['ver'];
        $hosturl = urlencode('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
        $updatehost = 'http://e.eake.cn/update.php';
        $updatehosturl = $updatehost . '?a=client_check_time&v=' . $ver . '&u=' . $hosturl;
        $domain_time = file_get_contents($updatehosturl);
        if ($domain_time == '0') {
            $domain_time = '[授权版本：未授权，不能使用一键更新功能，请联系客服QQ:4115037]';
        } else {
            $domain_time = '授权版本：[高级运营版终生使用权] 一键更新服务截止：(' . date('Y-m-d', $domain_time) . ')';
        }
        $this->assign('ver', $ver);
        $this->assign('domain_time', $domain_time);
        $this->display();
    }
}
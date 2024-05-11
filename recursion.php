class Solution {
    function getSum($a, $b) {
        if ($b == 0) return $a;
        $ret = ($a & $b) << 1;
        $a = $a ^ $b;
        return $this->getSum($a, $ret);
}

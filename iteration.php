class Solution {
    function getSum($a, $b) {
        while ($b != 0) {
            $ret = ($a & $b) << 1;
            $a = $a ^ $b;
            $b = $ret;
        }
        return $a;
    }
}

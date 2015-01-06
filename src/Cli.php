<?php
/**
 * Author: xuqingfeng
 * Date: 15/1/6
 * Time: 下午5:14
 */

namespace Sweet;

class Cli {

    public static $foregroundColors = array(
        'black'            => "\033[0;30m",
        'lightBlack'       => "\033[1;30m",
        'underlineBlack'   => "\033[4;30m",
        'red'              => "\033[0;31m",
        'lightRed'         => "\033[1;31m",
        'underlineRed'     => "\033[4;31m",
        'green'            => "\033[0;32m",
        'lightGreen'       => "\033[1;32m",
        'underlineGreen'   => "\033[4;32m",
        'yellow'           => "\033[0;33m",
        'lightYellow'      => "\033[1;33m",
        'underlineYellow'  => "\033[4;33m",
        'blue'             => "\033[0;34m",
        'lightBlue'        => "\033[1;34m",
        'underlineBlue'    => "\033[4;34m",
        'magenta'          => "\033[0;35m",
        'lightMagenta'     => "\033[1;35m",
        'underlineMagenta' => "\033[4;35m",
        'cyan'             => "\033[0;35m",
        'lightCyan'        => "\033[1;35m",
        'underlineCyan'    => "\033[4;35m",
        'white'            => "\033[0;36m",
        'lightWhite'       => "\033[1;36m",
        'underlineWhite'   => "\033[4;36m"
    );

    public static $backgroundColors = array(
        'black'   => "\033[40m",
        'red'     => "\033[41m",
        'green'   => "\033[42m",
        'yellow'  => "\033[43m",
        'blue'    => "\033[44m",
        'magenta' => "\033[45m",
        'cyan'    => "\033[46m",
        'white'   => "\033[47m"
    );

    public static $styleEnd = "\033[0m";
    public static $lineEnd = PHP_EOL;

    /**
     * @param $string
     * @param null $foregroundColor
     * @param null $backgroundColor
     * @return string
     */
    public static function stylize($string, $foregroundColor = null, $backgroundColor = null) {

        $stylizedString = "";

        if (isset(self::$foregroundColors[$foregroundColor])) {
            $stylizedString .= self::$foregroundColors[$foregroundColor];
        }

        if (isset(self::$backgroundColors[$backgroundColor])) {
            $stylizedString .= self::$backgroundColors[$backgroundColor];
        }

        $stylizedString .= $string . self::$styleEnd . self::$lineEnd;

        return $stylizedString;
    }

    /**
     * @param $string
     * @return string
     */
    public static function danger($string) {

        return self::stylize($string, 'red');
    }

    /**
     * @param $string
     * @return string
     */
    public static function warning($string) {

        return self::stylize($string, 'yellow');
    }

    /**
     * @param $string
     * @return string
     */
    public static function primary($string) {

        return self::stylize($string, 'blue');
    }

    /**
     * @param $string
     * @return string
     */
    public static function success($string) {

        return self::stylize($string, 'green');
    }

    /**
     * Need to call progress(0) first!
     * @param $percent
     */
    public static function progress($percent) {

        if (is_int($percent)) {
            if (0 == $percent) {
                fwrite(STDOUT, "\0337");
            } else if ($percent > 0 && $percent <= 100) {
                $step = intval($percent / 10);
                $completed = self::$foregroundColors['green'] . str_repeat("#", $step) . self::$styleEnd;
                $left = str_repeat(".", 10 - $step);
                $bar = "\0338[" . $completed . $left . "]$percent%";
                fwrite(STDOUT, $bar);
                if (100 == $percent) {
                    fwrite(STDOUT, self::$lineEnd);
                }
            } else {
                $errorInfo = self::stylize("Wrong Progress Param!", "red");
                fwrite(STDOUT, $errorInfo);
            }
        } else {
            $errorInfo = self::stylize("Wrong Progress Param!", "red");
            fwrite(STDOUT, $errorInfo);
        }
    }
} 
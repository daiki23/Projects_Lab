if ( ! function_exists('str_increment'))
{
  /**
   * Add's _1 to a string or increment the ending number to allow _2, _3, etc
   *
   * @param    string    required
   * @param    string    What should the duplicate number be appended with
   * @param    string    Which number should be used for the first dupe increment
   * @return    string
   */
  function str_increment($str, $separator = '_', $first = 1)
  {
    preg_match('/(.+)'.preg_quote($separator, '/').'([0-9]+)$/', $str, $match);
    return isset($match[2]) ? $match[1].$separator.($match[2] + 1) : $str.$separator.$first;
  }
}
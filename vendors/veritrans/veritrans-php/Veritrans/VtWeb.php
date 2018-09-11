<?php
/**
 * Create VtWeb transaction and return redirect url
 *
 */
class Veritrans_VtWeb {

  /**
   * Create VT-Web transaction
   *
   * Example:
   *
   * ```php
   *   $params = array(
   *     'transaction_details' => array(
   *       'order_id' => rand(),
   *       'gross_amount' => 10000,
   *     )
   *   );
   *   $paymentUrl = Veritrans_Vtweb::getRedirectionUrl($params);
   *   header('Location: ' . $paymentUrl);
   * ```
   *
   * @param array $params Payment options
   * @return string Redirect URL to VT-Web payment page.
   * @throws Exception curl error or veritrans error
   */
  public static function getRedirectionUrl($params)
  {
    if (Veritrans_Config::$isSanitized) {
      Veritrans_Sanitizer::jsonRequest($params);
    }

    $result = Veritrans_ApiRequestor::post(
        Veritrans_Config::getBaseUrl() . '/charge',
        Veritrans_Config::$serverKey,
        $params);

    return $result->redirect_url;
  }
}

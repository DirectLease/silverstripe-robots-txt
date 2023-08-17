<?php

namespace Odorisioe\SilverStripe\RobotsTxt\Dev;

use SilverStripe\Dev\DevBuildController;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\Control\HTTPResponse;
/**
 *
 *
 * @author Emmanuel Odorisio <odorisioe@gmail.com>
 * @package silverstripe-robots-txt
 */

class DevBuildExtension extends DevBuildController
{
  private static $url_handlers = array(
    '' => 'build'
  );

  private static $allowed_actions = array(
    'build'
  );

  /**
   *
   *
   */
  public function build(HTTPRequest $request): HTTPResponse
  {
    echo 'custom build';die;
    //do stuff before the build
    return parent::build($request);
    //do stuff after the build
  }

}

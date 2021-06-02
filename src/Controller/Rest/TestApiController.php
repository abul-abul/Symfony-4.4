<?php


namespace App\Controller\Rest;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\Model;
//use Nelmio\ApiDocBundle\Annotation\Security;
use Swagger\Annotations as SWG;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class TestApiController extends FOSRestController
{



//    /**
//     * List the rewards of the specified user.
//     *
//     * This call takes into account all confirmed awards, but not pending or refused awards.
//     * @Route("/api/test", methods={"POST"})
//     * @SWG\Response(
//     *
//     *     response=500,
//     *     description="bad request",
//     *     @SWG\Schema(
//     *         type="array",
//     *         @SWG\Items(ref=@Model(type=Test::class, groups={"200"}))
//     *
//     *     )
//     * )
//     * @SWG\Parameter(
//     *     name="order",
//     *     in="query",
//     *     type="string",
//     *     description="The field used to order rewards"
//     * )
//     * @SWG\Tag(name="rewards")
//     * @Security(name="Bearer")
//     */
    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/api/test", methods={"POST"})
     * @SWG\Post(
     *      tags={"Orders"},
     *      summary="Setup an order with status draft.",
     *      description="Setup an order with status draft",
     *      consumes={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Json order info body (customer and products info)",
     *          required=true,
     *          @SWG\Schema(
     *              @SWG\Property(property="email", type="string"),
     *              @SWG\Property(property="title", type="string" )
     *          ),
     *
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *      @SWG\Response(
     *         response=401,
     *         description="Expired JWT Token | JWT Token not found | Invalid JWT Token",
     *      )
     *     )
     *
     */
    public function getApiTest(Request $request)
    {

        return new JsonResponse(array('email' => "test",'title' => "test"));
//        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
//            throw $this->createAccessDeniedException();
//        }
        //$data = json_decode($request->getContent(), true);
//
       // $request->request->replace($data);
        $email = $request->request->get('email');
        $title = $request->request->get('title');

//        dump($oreder);die;
        return new JsonResponse(array('email' => $email,'title' => $title));
    }

}
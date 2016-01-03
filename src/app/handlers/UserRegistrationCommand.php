<?php
namespace onion\app\handlers;
use onion\domain\model;

class UserRegistrationCommandHandler implements CommandHandlerInterface
{
  private $repository;

  public function __construct(RepositoryInterface $userRepository)
  {
    $this->repository = $userRepository;
  }

  function handle($command)
  {
    $user = new User($username,$password,$email);
    $this->repository->store($user);
  }
}
